@extends('voyager::master')

@section('content')
    <div class="page-content"style="padding-left:20px;">
        @include('voyager::alerts')
        @include('voyager::dimmers')
        <h1><?= $author?></h1>
    </div>
@stop
