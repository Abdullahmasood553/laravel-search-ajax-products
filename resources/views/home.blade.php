
@extends('layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 m-auto">
                <h3 class="text-center mb-3">
                    <i class="fas fa-flag-usa"></i> Enter Product Search
                </h3>

                <div class="form-group form-box">
                    <input type="text" name="search_product" id="search_product" class="form-control form-control-lg" placeholder="Enter Product Name">
                    <button type="button" id="get_search_product" class="btn btn-lg btn-md btn-primary ml-4" style="">Submit</button>
                </div>
                <div id="productList"></div>
                @csrf
                {{-- <div class="form-group form-box">
                    <button type="button" id="get_search_product" class="btn btn-lg btn-sm btn-primary">Submit</button>
                </div> --}}
            </div>
        </div>
    </div>

        <div class="container item-boxes">
            <div class="row">
                @foreach ($products as $key)    
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('storage/products/'.$key->image) }}" width="200px;" height="200px;">
                        <div class="card-body">
                          <p class="card-text">{{ $key->title }}</p>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection

