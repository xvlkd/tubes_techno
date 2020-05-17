<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Review;
use Illuminate\Http\Request;

class SpinController extends Controller
{
    public function index(Request $request)
    {
        
        $review = Review::all();
        return view('spin.index', compact('review'));
    }
    public function create()
    {
        return view('review.create');
    }
    public function show(Review $review)
    {
        return view('spin.show', compact('review'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name_film' => 'required',
            'genre' => 'required',
            'type' => 'required',
            'rating' => 'required',
            'review' => 'required',
            'picture' => 'required',
        ]);

        $review = new Review;
        $review->name_film = $request->name_film;
        $review->genre = $request->genre;
        $review->type = $request->type;
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->picture = NULL;

        $review->save();

        return redirect('/spin')->with('status', 'successfully added a review!');
    }

    public function search(Request $request)
    {
        $search  = $request->get('genre','rating');
 
        $review = DB::table('review')
            ->where([
                ['genre', 'like', '%' . $search . '%']
            ])
            ->orWhere([
                ['rating', 'like', '%' . $search . '%']
            ])
            ->orWhere([
                ['type', 'like', '%' . $search . '%']
            ])
            ->get();
            
        return view('spin.index', compact('review'));
    }
    public function indexx(Request $request)
    {
        if(request()->ajax())
        {
            if(!empty($request->filter_genre))
            {
                $review = DB::table('review')
                ->select('nama_film', 'review', 'genre', 'rating', 'type', 'picture')
                ->where('genre',$request->filter_genre)
                ->where('rating',$request->filter_country)
                ->get();
            }
            else
            {
                $review = DB::table('review')
                    ->select('nama_film', 'review', 'genre', 'rating', 'type', 'picture')
                    ->get();
            }
            return datatables()->of($review)->make(true);
        }
        $genre = DB:: table('review')
                    ->select('genre')
                    ->groupBy('genre')
                    ->orderBy('genre','ASC')
                    ->get();
        $review = Review::all();
        return view('spin.index',compact('genre','review'));
    }


}