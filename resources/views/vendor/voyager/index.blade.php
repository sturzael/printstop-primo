@extends('voyager::master')

@section('content')
    <div class="page-content"style="padding-left:20px;">
        @include('voyager::alerts')
        @include('voyager::dimmers')
        <form class="" action="#" method="post">
          @if(count($data[0]) > 0)
          <label for="size">Finished Size </label>
          <select id="size">
            @foreach($data[0] as $service)
            <option> {{$service}}</option>
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
