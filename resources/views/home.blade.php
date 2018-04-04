@extends('layouts.backend.table')

@section('content')
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Tables</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Data Table Example
      </div>
    <div class="card-body">
        <div class="table-responsive">
          <form class="form-horizontal" method="post" action="/insert/store" enctype="multipart/form-data">
            {{ csrf_field() }}
    <input type="hidden" name="id" value="{{isset($update->id)?$update->id : ''}}">
   <div class="form-group">
      <label for="inputEmail" class="control-label col-xs-2" value="">Product Name</label>
        <div class="col-xs-10">
          <input type="text" name="productname" class="form-control" id="inputEmail" value="{{ old('productname',isset($update) ? $update->productname :'')}}" placeholder="Product Name">
          @if ( $errors->has('productname') )
           <p style="color:red">  {{ $errors->first('productname') }} </p>
           @endif
        </div>
    </div>
        <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Model</label>
        <div class="col-xs-10">
          <input type="text"  name="model" class="form-control" id="inputPassword" value="{{ old('model',isset($update) ? $update->model :'')}}" placeholder="Model">
         @if ( $errors->has('model') )
           <p style="color:red">  {{ $errors->first('model') }} </p>
         @endif
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Price</label>
        <div class="col-xs-10">
          <input type="text" name="price" class="form-control" id="inputPassword" value="{{ old('price',isset($update) ? $update->price :'')}}" placeholder="Price">
          @if ( $errors->has('price') )
            <p style="color:red">  {{ $errors->first('price') }} </p>
             @endif
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">quantity</label>
        <div class="col-xs-10">
          <input type="text" name="quantity" class="form-control" id="inputPassword" value="{{old('quantity',isset($update)?$update->quantity : '')}}" placeholder="quantity">
          @if ( $errors->has('quantity') )
          <p style="color:red">  {{ $errors->first('quantity') }} </p>
           @endif
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Image</label>
        <div class="col-xs-10">
          <input type="file" name="image" >
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <button type="submit" name="save" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
@endsection
