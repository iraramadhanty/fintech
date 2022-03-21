@extends("layouts.app")

<?php
$page = "Canteen";
?>

@section("content")
    {{-- menu --}}
        <div class="container">
            <div class="card mt-5">
                <div class="card-header" style="background-color: #8EBFE3">
                    Menu
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                                <div class="card-body">
                                    <h5 class="card-title">Bakso</h5>
                                    <p class="card-text">Bakso daging</p>
                                    <p class="card-text">10000</p>
                                    <input type="number">
                                    <a href="#" class="btn btn-primary">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection

