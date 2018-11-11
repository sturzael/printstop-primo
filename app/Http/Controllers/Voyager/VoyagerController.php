<?php

namespace Primo\Http\Controllers\Voyager;
use Illuminate\Http\Request;
use Primo\product_model;

use TCG\Voyager\Http\Controllers\VoyagerController as BaseVoyagerController;
use TCG\Voyager\Facades\Voyager;
class VoyagerController extends BaseVoyagerController
{
  public function index()
  {
    die("here");
    $products = json_decode(product_model::all(),true);
    return Voyager::view('voyager::index', compact('products'));
  }

}
