@extends("layouts.app")

@section('content')
    <div class="container">

        {{-- my balance --}}
        <div class="card">
            <div class="card-header" style="background-color: #8EBFE3">
                Saldo
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>Rp. <span>{{ auth()->user()->balance->balance }}</span> </p>
                </blockquote>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header" style="background-color: #8EBFE3">
                        Keranjang
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Bakso</td>
                                    <td>10000</td>
                                    <td>1</td>
                                    <td>10000</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="#" class="btn btn-primary">Check Out</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header" style="background-color: #8EBFE3">
                        Check Out
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Bakso</td>
                                    <td>10000</td>
                                    <td>1</td>
                                    <td>10000</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
