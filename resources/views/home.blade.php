@extends('layouts.app')

<?php
$page = 'Home';
?>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Home') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (Auth::user()->role_id === 4)
                            <div class="row">
                                <div class="card col" style="width: 100px; height: 100px; align-items:center; justify-content:center; margin:5px; background-color: #4287f5">
                                    <a href="{{ route('topup.index') }}" style="text-decoration: none; color: white" >Top Up</a>
                                </div>
                                <div class="card col" style="width: 100px; height: 100px; align-items:center; justify-content:center; margin:5px; background-color: #4287f5">
                                    <a href="{{ route('item.list') }}" style="text-decoration: none; color: white">Canteen</a>
                                </div>

                                <div class="card col" style="width: 100px; height: 100px; align-items:center; justify-content:center; margin:5px; background-color: #4287f5">
                                    <a href="{{ route('transaction.index') }}" style="text-decoration: none; color: white">History
                                        Transaction</a>
                                </div>
                            </div>
                        @endif
                        @if (Auth::user()->role_id === 3)
                            <div class="card" style="width: 100%; height: 50%">
                                <a href="{{ route('item.list') }}" class="btn btn-primary">Barang</a>
                            </div>
                        @endif
                        @if (Auth::user()->role_id === 2)
                            <div class="card" style="width: 100%; height: 50%">
                                <a href="{{ route('bank.index') }}" class="btn btn-primary">Check</a>
                            </div>
                        @endif
                        @if (Auth::user()->role_id === 1)
                            <div class="card" style="width: 100%; height: 50%">
                                <a href="{{ route('user.list') }}" class="btn btn-primary">User</a>
                            </div>
                        @endif
                        {{-- @if (Auth::user()->role_id === 2)
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Nominal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengajuans as $key => $pengajuan)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $pengajuan->user->name }}</td>
                                            <td>{{ $pengajuan->jumlah }}</td>
                                            <td>
                                                <a href="{{ route('topup.setuju', ['transaksi_id' => $pengajuan->id]) }}"
                                                    class="btn btn-success">
                                                    Setuju
                                                </a>
                                                <a href="{{ route('topup.tolak', ['transaksi_id' => $pengajuan->id]) }}"
                                                    class="btn btn-danger">
                                                    Tolak
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                        @if (Auth::user()->role_id === 3)
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Nominal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengajuan_jajans as $key => $pengajuan_jajan)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $pengajuan_jajan->user->name }}</td>
                                            <td>{{ $pengajuan_jajan->jumlah }}</td>
                                            <td>
                                                <a href="{{ route('jajan.setuju', ['invoice_id' => $pengajuan_jajan->invoice_id]) }}"
                                                    class="btn btn-success">
                                                    Setuju
                                                </a>
                                                <a href="{{ route('jajan.tolak', ['invoice_id' => $pengajuan_jajan->invoice_id]) }}"
                                                    class="btn btn-danger">
                                                    Tolak
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
