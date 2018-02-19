<?php

namespace SerialViewer\Http\Controllers;

use Illuminate\Http\Request;
use SerialViewer\Genres;

class GenresController extends Controller
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
   * Show all the genres
   *
   * @return array()
   */
  public function showAll()
  {
      $genres = Genres::all();
      return $genres;
  }

  /**
   * Show one genre
   *
   * @return array()
   */
  public function showOne($id)
  {
      $genre = Genres::find($id);
      return $genre;
  }
}
