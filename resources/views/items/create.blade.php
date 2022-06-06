@extends('layouts/app')
@section('title', 'Create Game')

@section('content')
<div class="container">
    <h1>Add Items</h1>
    <hr>
</div>
    <div class="container">
        <div class="col-md-6 bg-light management-wrapper">
            <h3><i class="uil uil-plus me-1"></i>Add Items</h3>
            <p>Add new items</p>
            <hr>
            <form action="{{ route('item.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Item Name</label>
                    <input type="text" class="form-control" name="nama" placeholder="Enter item name">
                    @error('judul') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Quantity</label>
                    <input type="text" class="form-control" name="jumlah" placeholder="Enter quantity">
                    @error('publisher') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection


