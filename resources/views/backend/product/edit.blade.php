@extends('backend.layouts.app')

@section('content')
  <div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
      <div class="nk-block-between">
        <div class="nk-block-head-content">
          <h3 class="nk-block-title page-title">New Product</h3>
        </div><!-- .nk-block-head-content -->

      </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->


    <div class="nk-block-head">
      <div class="nk-block-head-content">
        <h5 class="nk-block-title">Edit Product</h5>
        <div class="nk-block-des">
          <p>Changes in product information.</p>
        </div>
      </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block">
      <div class="row g-3">
        @if ($errors->any())
          <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form name="productForm" action="{{ route('products.update', $product->id) }}" method="post"
          enctype="multipart/form-data">
          @csrf
          {{ method_field('PATCH') }}
          <div class="col-12">
            <div class="form-group">
              <label class="form-label" for="product_name">Product Name</label>
              <div class="form-control-wrap">
                <input type="text" class="form-control" id="product_name"
                  value="{{ old('product_name') ? old('product_name') : $product->product_name }}" name="product_name">
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label class="form-label" for="product_details">Product Details</label>
              <div class="form-control-wrap">
                <textarea name="product_details" id="product_details" cols="30" rows="6" class="form-control">{{ old('product_details') ? old('product_details') : $product->product_details }}</textarea>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="form-label" for="regular-price">Price</label>
              <div class="form-control-wrap">
                <input type="number" class="form-control" id="product_price" name="product_price"
                  value="{{ old('product_price') ? old('product_price') : $product->product_price }}">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="form-label" for="product_stock">Stock</label>
              <div class="form-control-wrap">
                <input type="number" class="form-control" id="product_stock" name="product_stock"
                  value="{{ old('product_stock') ? old('product_stock') : $product->product_stock }}">
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label class="form-label" for="category">Category</label>
              <div class="form-control-wrap">
                <select name="product_category" id="product_category" class="form-control">
                  <option value="">Select one</option>
                  @foreach ($cats as $cat)
                    <option
                      {{ old('product_category') ? (old('product_category') == $cat->id ? 'selected' : '') : ($product->product_category == $cat->id ? 'selected' : '') }}
                      value="{{ $cat->id }}">
                      {{ $cat->cat_name }}</option>
                  @endforeach
                </select>

              </div>
            </div>
          </div>
          <div class="col-12">
            <!-- <div class="upload-zone small bg-lighter my-2"> -->
            <label class="form-label" for="product_image">Product Image</label>
            <input type="file" class="form-control" id="product_image" name="product_image">
            <span class="dz-message-text">Drag and drop file</span>
            </input>
            <img src="/product_photos/{{ $product->product_image }}" width="200" alt="">
            <!-- </div> -->
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>UPDATE</span></button>
          </div>
        </form>
      </div>
    </div><!-- .nk-block -->

  </div>

@endsection
