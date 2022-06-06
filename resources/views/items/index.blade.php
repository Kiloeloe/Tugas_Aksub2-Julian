@extends('layouts/app')

@section('title','Manage Items')
@section('content')
<div class="container">
    <h1>Manage Items</h1>
    <hr>
</div>
    <div class="container">
        <div class="col-md-8 bg-light management-wrapper">
            <h3><i class="uil uil-create-dashboard me-1"></i>Manage Items</h3>
            <p>Add Or View Items</p>
            <hr>
            <a href="{{ url('items/create') }}" class="btn btn-dark btn-sm mb-3"><i class="uil uil-plus me-1"></i>Add Items</a>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <i class="uil uil-check-circle me-1"></i>{{ session('success') }}
                </div>
            @endif
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $number = 1; ?>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $number++ }}</td>
                            <td>{{ $item['nama'] }}</td>
                            <td>{{ $item['jumlah'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
