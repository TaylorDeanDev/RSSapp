<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vedmant\FeedReader\Facades\FeedReader;

class RSSController extends Controller
{

   public function index()
   {
     return view('RSS.index');
   }

  public function show(Request $request)
  {
    $f = FeedReader::read($request->url);

    return view('RSS.show')->with('feed', $f)->with('url', $request->url);
  }
}
