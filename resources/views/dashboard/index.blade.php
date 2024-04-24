@extends('layouts.main')

@section('title')
    Dashboard
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active" aria-current="page">Home</li>
@endsection

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <h4 class="card-title">Selamat Datang {{ auth()->user()->name }} !</h4>
        </div>
        <div class="card-body">
            Tetapkan langkahmu dengan mantap, karena Anda telah berhasil masuk ke dalam aplikasi Point
            of Sales kami! Selamat datang kembali di antarmuka yang penuh inovasi, tempat di mana setiap
            transaksi menjadi lebih mudah dan lebih cepat. Mari mulai petualangan berbelanja Anda dengan
            penuh semangat dan kegembiraan!
        </div>
    </div>
@endsection
