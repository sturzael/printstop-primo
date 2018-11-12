@extends('voyager::master')

@section('content')
    <div class="page-content"style="padding-left:20px;">
      @foreach($products as $product)
      <option> {{$product['paper']}}</option>
      @endforeach

      <div class="row">
          @foreach($products as $product)
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$product['paper']}}</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="dashboard/{{$product['id']}}" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
    @endforeach
      </div>
    </div>
@stop
