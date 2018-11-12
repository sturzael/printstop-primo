@extends('voyager::master')

@section('content')
    <div class="page-content"style="padding-left:20px;">
        @include('voyager::alerts')
        @include('voyager::dimmers')
        <h1>{{$data['title']}}</h1>
        <form class="" action="#" method="post">
          @if(count($data['sizes']) > 0)
          <label for="size">Finished Size </label>
          <select id="size">
            @foreach($data['sizes'] as $size)
            <option> {{$size}}</option>
            @endforeach
        </select>
        @endif
        <label for="size">Pages</label>
        <select id="size">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>

      @if(count($data['Lamination']) > 0)
      <label for="paper">Lamination</label>
      <select id="paper">
      @foreach($data['Lamination'] as $Laminationtype)
      <option> {{$Laminationtype}}</option>

      @endforeach
          <option>No Lamination</option>
      </select>
    @endif
  <label for="Quantity">Quantity</label>
<input type="number" name="Quantity" max="99999">
        </form>

    </div>
@stop
