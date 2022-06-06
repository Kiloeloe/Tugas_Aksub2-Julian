@extends('layouts/app')

@section('title')

@section('content')
    <div class="container">
        <h1>Halaman Home</h1>
        <hr>
    </div>

    {{-- banner --}}
    <div class="container banner bg-dark text-white">
        <h1>Halaman Home</h1>
        <p>This is home page</p>
        <hr>
        <div class="button">
            <a href="{{url('/items')}}" class ="btn tombol-list">List</a>
            <a href="{{url('/items/manage')}}" class ="btn tombol-manage">Manage</a>
        </div>
    </div>

    {{-- content --}}
    <div class="container mt-5">
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
