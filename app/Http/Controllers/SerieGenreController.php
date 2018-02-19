<?php

namespace SerialViewer\Http\Controllers;

use Illuminate\Http\Request;
use SerialViewer\SerieGenre;

class SerieGenreController extends Controller
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
   * Show all the link between series and genres
   *
   * @return array()
   */
  public function showAll()
  {
      $genres = SerieGenre::all();
      return $genres;
  }

  /**
   * Show all the link between series and one genre
   *
   * @return array()
   */
  public function showAllByGenre($idGenre)
  {
      $serieGenre = SerieGenre::where('genreId', $idGenre)->cursor();
      return $serieGenre;
  }

  /**
   * Show one link between serie and genre
   *
   * @return array()
   */
  public function showOne($id)
  {
      $genre = SerieGenre::find($id);
      return $genre;
  }
}
