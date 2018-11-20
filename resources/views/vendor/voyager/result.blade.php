@extends('voyager::master') @section('content')
<div class="row">
  <div class="col-sm-6" id="product_image">
    <img src="http://localhost:8000/storage/p0rFdVJ8ZUhNpSWyPK60c0bPlD2Lmr8p7HJ3pMG8.jpeg" width="80%">
  </div>
  <div class="col-sm-6">
    <div class="page-content" style="padding-left:20px;">
      @include('voyager::alerts') @include('voyager::dimmers')
      <script type="text/javascript">



      var storedNames = JSON.parse(localStorage.getItem("lamination"));

      console.log(storedNames);
      </script>

    </div>
  </div>
</div>
@stop
