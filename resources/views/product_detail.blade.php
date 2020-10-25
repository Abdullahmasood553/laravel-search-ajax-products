<!DOCTYPE html>

@extends('layouts.master')
@section('content')



  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
      
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="card mt-4">
          <img class="card-img-top" src="{{ asset('assets/images/products/'.$product->image) }}" alt="">
          <div class="card-body">
            <h3 class="card-title">{{ $product->title }}</h3>

            <h4>$ {{ $product->price }}</h4>
            <p class="card-text">{{ $product->description }}</p>
          </div>
        </div>
        <!-- /.card -->

        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

@endsection
