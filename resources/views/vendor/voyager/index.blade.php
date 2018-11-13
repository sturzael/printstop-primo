@extends('voyager::master')

@section('content')
    <div class="page-content"style="padding-left:20px; padding-top:20px;">

      <div class="row">
          @foreach($products as $product)
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$product['product_name']}}</h5>
              <p class="card-text">Product ID: {{$product['product_id']}}</p>
              <a href="dashboard/product/{{$product['id']}}" class="btn btn-primary">View</a>
            </div>
          </div>
        </div>
    @endforeach
      </div>
    </div>
@stop
