<?php

namespace SerialViewer\Http\Controllers;

use Illuminate\Http\Request;
use SerialViewer\Series;

class SeriesController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function showAll()
  {
      $series = Series::all();
      $parameters = [
        'series' => $series
      ];
      return view('series',$parameters);
  }

  public function showOne(Request $request, $id)
  {
      $serie = Series::find($id);
      $parameters = [
        'serie' => $serie
      ];
      return view('seriePage',$parameters);

  }
}
