@extends('voyager::master') @section('content')

<div class="row">
  <div class="col-sm-6" id="product_image">
    <?php if (isset($data['Image'])) {?>
    <img src="/storage/{{$data['Image']}}" width="80%">
  <?php }else {?>
      <img src="/storage/<?=$product->product_image?>" width="80%">
<?php  } ?>

  </div>
  <div class="col-sm-6">
    <div class="page-content" style="padding-left:20px;">
      @include('voyager::alerts') @include('voyager::dimmers')
      <h1>
        <?=$product->product_name ?>
      </h1>
      <form id="estimateform" method="post">
          <input type="hidden" name="productTypeID" value="{{$data['ProductTypeId']}}">
          <input type="hidden" name="productTypePartID" value="{{$data['ProductTypePartId']}}">
          <input type="hidden" name="productID" value="{{$data['ProductId']}}">
        @if(count($data['sizes']) > 0)
        <div class="form-element">
          <label for="size">Finished Size </label>
          <select id="size" required>
            @foreach($data['sizes'] as $size)
            <option value="{{$size['Code']}}"> {{$size['Description']}}</option>
            @endforeach
          </select>
        </div>
        @endif

        @if(count($data['Stock']) > 0)
        <div class="form-element">
          <label for="stock">Paper</label>
          <select id="stock" name="stock" required>
            @foreach($data['Stock'] as $paper)
            <option value="{{$paper['Code']}}"> {{$paper['Stock']}}</option>
            @endforeach
          </select>
        </div>
        @endif

        <div class="form-element">
          <label for="pages">Pages</label>
          <input type="number" id="pages" name="pages" min="1" max="{{$data['pages']}}" required>
        </div>

        @if(count($data['Lamination']) > 0)
        <div class="form-element">
          <label for="lamination" >Lamination</label>
          <select id="lamination" name="lamination" required>
            @foreach($data['Lamination'] as $LaminationType)
            <option value="{{$LaminationType['ID']}}"> {{$LaminationType['Description']}}</option>
            @endforeach
            <option value="0">No Lamination</option>
          </select>
        </div>
        @endif

        <div class="form-element">
          <label for="Quantity">Quantity</label>
          <input type="number" id="Quantity" name="Quantity" min="{{$data['minquantity']}}" max="{{$data['maxquantity']}}" required>
        </div>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="form-element">
            <input type="submit">
        </div>

      </form>

    <div id="result_container">
        <p id="price"></p>
        <img src="/appImages/estimateLoading.gif" alt="loading gif" width="35px" id="estimate_loader">
        </div>
    </div>
  </div>
</div>

@stop
