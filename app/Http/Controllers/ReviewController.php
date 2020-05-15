<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Review;
use Illuminate\Http\Request;
use PDF;

class ReviewController extends Controller
{
    public function index()
    {
        $review = Review::all();
        return view('review.index', compact('review'));
    }
    public function create()
    {
        return view('review.create');
    }
    public function show(Review $review)
    {
        return view('review.show', compact('review'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name_film' => 'required',
            'genre' => 'required',
            'type' => 'required',
            'rating' => 'required',
            'review' => 'required'
        ]);

        $tempPict = DB::table('review')->where([
            ['name_film', 'like', '%' . $request->name_film . '%'],
        ])->first();

        $review = new Review;
        $review->name_film = $request->name_film;
        $review->genre = $request->genre;
        $review->type = $request->type;
        $review->rating = $request->rating;
        $review->review = $request->review;
        if ($tempPict->picture != NULL) {
            $review->picture = $tempPict->picture;
        } else {
            $review->picture = ('public/picture/default-image.jpg');
        }

        $review->save();

        return redirect('/review')->with('status', 'successfully added a review!');
    }

    public function search(Request $request)
    {
        $search  = $request->get('search');
        $review = DB::table('review')->where([
            ['name_film', 'like', '%' . $search . '%']
        ])
            ->orWhere([
                ['genre', 'like', '%' . $search . '%']
            ])
            ->orWhere([
                ['type', 'like', '%' . $search . '%']
            ])
            ->orWhere([
                ['rating', 'like', '%' . $search . '%']
            ])
            ->get();
        return view('review.index', compact('review'));
    }
    public function cetak_pdf()
    {
        $review = Review::all();

        $pdf = PDF::loadview('/review/review_pdf', compact('review'));
        return $pdf->download('laporan-review-pdf.pdf');
    }
}
