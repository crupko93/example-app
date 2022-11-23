<?php

namespace App\Http\Controllers;

use App\Models\Actors;
use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    //
    public function index()
    {   
        $actors = Actors::with('movies')->get(); //dd($actors);
        return view('index', 
            [ 
                'actors' => $actors, 
            ]
        );
    }

    public function search(Request $request)
    {
        if( $request['query'] !== null)
        {
            $response = Http::accept('application/json')->get('http://swapi.dev/api/people', 
                [
                    'search' => $request['query']
                ]
            );
            
            return view('starWars', 
                [ 
                    'query' => $request['query'], 
                    'response' => $response->json(), 
                ]
            );

        }else
        {
            return view('starWars', 
                [ 
                    'query' => $request['query'], 
                    'response' => ['count' => '0'],
                ]
            );
        }
    
    }
}
