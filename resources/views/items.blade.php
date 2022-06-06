@extends('layouts/app')

@section('title','Halaman Items')
@section('content')
<div class="container">
    <h1>All Items</h1>
    <hr>
</div>
    <div class="container mt-">
        <div class="row">
            @foreach ($items as $item)
            <div class="col md-4">
                <div class="col md-12 bg-light item-content">
                    <h1 class ="nama">{{$item->nama}}</h1>
                    <span class="bagde bg-info jumlah">{{$item->jumlah}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
