<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Review;

class CustomSearchController extends Controller
{
        function index(Request $request)
        {
            if(request()->ajax())
            {
                if(!empty($request->filter_rating))
                {
                    $data = DB::table('review')
                    ->select('name_film', 'review', 'genre', 'rating', 'type','picture')
                    ->where('genre',$request->filter_genre)
                    ->where('rating',$request->filter_rating)
                    ->get();
                }
                else
                {
                    $data = DB::table('review')
                        ->select('name_film', 'review', 'genre', 'rating', 'type','picture')
                        ->get();
                }
                return datatables()->of($data)->make(true);
            }
            $genre = DB:: table('review')
                        ->select('genre')
                        ->groupBy('genre')
                        ->orderBy('genre','ASC')
                        ->get();
            
            return view('customsearch.custom_search',compact('genre'));
        }
}

?>