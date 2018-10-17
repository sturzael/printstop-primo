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



      @if(count($data['sizes']) > 0)
    <label for="paper">Paper</label>
    <select id="paper">
      @foreach($data['papers'] as $paper)
      <option> {{$paper}}</option>
      @endforeach

  </select>
    @endif


        </form>

    </div>
@stop
<!-- Array (

        [title] => Leaflet - Folded
        [0] => Array (
                        [0] => A7
                        [1] => A6
                        [2] => DL
                        [3] => A5
                        [4] => A4
                        [5] => A3
                      )
      ) -->
