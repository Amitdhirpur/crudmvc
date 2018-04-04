@extends('layouts.backend.app')

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
          <div class="row">
            <div class="col-md-10">
          <i class="fa fa-table"></i> Data Table Example
        </div>
          <div class="col-md-2">
         <a class="btn btn-sm btn-primary " href="/home" role="button">Add Product</a>
       </div>
       </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Model</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Product Name</th>
                  <th>Model</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
              <tbody>
               @foreach($products as $product)
                <tr>
                  <td>{{ $product->productname }}</td>
                  <td>{{ $product->model }}</td>
                  <td>{{ $product->quantity }}</td>
                  <td>{{ $product->price }}</td>
                  <td><img src="{{ $product->image }}" height="90px" width="100px"></td>
                  <td><a href="/up/{{ $product->id }}">edit</a></td>
                  <td><a href="/dele/{{ $product->id }}">delete</a></td>
               </tr>
               @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
@endsection
