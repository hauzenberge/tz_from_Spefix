@extends('layouts.layout')

@section('content')
<h1>Products</h1>
<div class="row">
    @foreach($products as $product)
    <div class="col-md-4">
        <div class="card">
            @if($product->image != null)
            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">${{ $product->price }}</p>
                <button class="btn btn-primary" data-toggle="modal" data-target="#productModal" data-id="{{ $product->id }}">Details</button>
                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
<button class="btn btn-success" data-toggle="modal" data-target="#addProductModal">Add Product</button>

<!-- Product Modal -->
@include('products.components.product_modal')

<!-- Add Product Modal -->
@include('add_products.components.product_modal')
@endsection