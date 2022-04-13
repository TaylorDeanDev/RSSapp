<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vedmant\FeedReader\Facades\FeedReader;
use PDF;

class PDFController extends Controller
{

  public function createPDF(Request $request) {

    $feed = FeedReader::read($request->url);

    $pdf = PDF::loadView('PDF.pdf' , compact('feed'));
    
    return $pdf->download($feed->get_title() . '.pdf');
  }

}
