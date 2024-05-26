@extends('index')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-7 d-flex flex-column align-items-center">
                <div class="mt-5 text-center">
                    <h1 class="display-1" style="font-family: 'Libre Franklin', sans-serif">LAUNDRY</h1>
                    <div class="mt-2 display-3" style="font-family: 'Libre Franklin', sans-serif">
                        <p>E N T R Y</p>
                    </div>
                    <div class="mt-4">
                        <h5>MELAYANI LAUNDRY KILOAN, SEPATU, TAS, KARPET DAN LAINNYA. <br>
                            Website laundryen juga menyediakan antar jemput pesanan</h5>
                    </div>
                    <div class="d-grid gap-3 col-6 mx-auto mt-3">
                        <button class="btn btn-outline-primary btn-lg" type="button">Pesan Disini</button>
                        <button class="btn btn-outline-primary btn-lg" type="button">Lihat Antrian</button>
                    </div>
                </div>
            </div>
            <div class="col-md-5 d-flex flex-column align-items-center">
                <div>
                    <img src="{{ asset('images/logo-home.png') }}" alt="Logo" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection
