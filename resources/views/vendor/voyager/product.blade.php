@extends('voyager::master') @section('content')
<div class="row">
  <div class="col-sm-6" id="product_image">
    <img src="http://localhost:8000/storage/p0rFdVJ8ZUhNpSWyPK60c0bPlD2Lmr8p7HJ3pMG8.jpeg" width="80%">
  </div>
  <div class="col-sm-6">
    <div class="page-content" style="padding-left:20px;">
      @include('voyager::alerts') @include('voyager::dimmers')
      <h1>
        <?=$product->product_name ?>
      </h1>
      <form class="" action="#" method="post">

        @if(count($data['sizes']) > 0)
        <div class="form-element">
          <label for="size">Finished Size </label>
          <select id="size">
            @foreach($data['sizes'] as $size)
            <option value="{{$size['Code']}}"> {{$size['Description']}}</option>
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
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>

        @if(count($data['Lamination']) > 0)
        <div class="form-element">
          <label for="paper">Lamination</label>
          <select id="paper">
            @foreach($data['Lamination'] as $Laminationtype)
            <option value="{{$Laminationtype['Code']}}"> {{$Laminationtype['Description']}}</option>
            @endforeach
            <option>No Lamination</option>
          </select>
        </div>
        @endif

        <div class="form-element">
          <label for="Quantity">Quantity</label>
          <input type="number" name="Quantity" max="99999" value="">
        </div>
      </form>
    </div>
  </div>
</div>
@stop
