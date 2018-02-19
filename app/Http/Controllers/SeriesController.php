<?php

namespace SerialViewer\Http\Controllers;

use Illuminate\Http\Request;
use SerialViewer\Series;

class SeriesController extends Controller
{

    protected $genre;
    protected $serieGenre;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct(GenresController $genre, SerieGenreController $serieGenre)
  {
    $this->middleware('auth');
    $this->genre = $genre;
    $this->serieGenre = $serieGenre;
  }

  /**
   * all series.
   */
  public function all()
  {
      $series = Series::all();
      return $series;
  }

  /**
   * Show all the series.
   */
  public function showAll()
  {
      $series = Series::all();
      $genres = $this->genre->showAll();
      $parameters = [
        'series' => $series,
        'genres' => $genres
      ];
      return view('series',$parameters);
  }

  /**
   * Show all by on genre.
   *
   *
   */
  public function showByGenre(Request $request, $idGenre)
  {
      $seriesGenre = $this->serieGenre->showAllByGenre($idGenre);
      $genres = $this->genre->showAll();
      $series = [];
      foreach ($seriesGenre as $object) {
        $series[] = Series::find($object['serieId']);
      }
      $parameters = [
        'series' => $series,
        'genre' => $idGenre,
        'genres' => $genres
      ];
      return response()->json($parameters);
  }

  /**
   * Show one serie.
   *
   *
   */
  public function showOne(Request $request, $id)
  {
      $serie = Series::find($id);
      $parameters = [
        'serie' => $serie
      ];
      return view('seriePage',$parameters);

  }
}
