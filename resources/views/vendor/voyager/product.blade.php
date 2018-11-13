@extends('voyager::master')

@section('content')
<div class="row">
  <div class="col-sm-6" id="product_image">
    <img src="http://localhost:8000/storage/p0rFdVJ8ZUhNpSWyPK60c0bPlD2Lmr8p7HJ3pMG8.jpeg" width="80%">
  </div>
  <div class="col-sm-6">



    <div class="page-content" style="padding-left:20px;">
        @include('voyager::alerts')
        @include('voyager::dimmers')
        <h1><?=$product->product_name ?></h1>
        <form class="" action="#" method="post">
          @if(count($data['sizes']) > 0)
              <div class="form-element">
          <label for="size">Finished Size </label>
          <select id="size">
            @foreach($data['sizes'] as $size)
            <option> {{$size}}</option>
            @endforeach
        </select>
          </div>
        @endif

        @if(count($data['Stock']) > 0)
        <div class="form-element">
    <label for="size">Paper</label>
    <select id="size">
      @foreach($data['Stock'] as $paper)
      <option> {{$paper}}</option>
      @endforeach
  </select>
    </div>
      @endif




              <div class="form-element">
        <label for="size">Pages</label>
        <select id="size">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
</div>
      @if(count($data['Lamination']) > 0)
            <div class="form-element">
      <label for="paper">Lamination</label>
      <select id="paper">
      @foreach($data['Lamination'] as $Laminationtype)
      <option> {{$Laminationtype}}</option>

      @endforeach
          <option>No Lamination</option>
      </select>
    </div>
    @endif
          <div class="form-element">
  <label for="Quantity">Quantity</label>
<input type="number" name="Quantity" max="99999">
</div>
        </form>

    </div>

  </div>
</div>

@stop
