<?php

namespace SerialViewer\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
      'datas/addSuiviSerie',
      'datas/addRateSerie'
    ];
}
