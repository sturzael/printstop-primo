<?php

namespace Primo\Http\Controllers\Voyager;
use Illuminate\Http\Request;
use Primo\product_model;

use TCG\Voyager\Http\Controllers\VoyagerController as BaseVoyagerController;
use TCG\Voyager\Facades\Voyager;
class VoyagerController extends BaseVoyagerController
{

  public function __construct() {
    $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'update', 'delete']]);
  }

  public function index()
  {
    $products = json_decode(product_model::all(),true);
    return  view('vendor.voyager.index', compact('products'));
  }

  public function show($id) {
    $product = product_model::where('id', "=", $id)->firstOrFail();
    return view('location.index', compact('product'));
  }

}
