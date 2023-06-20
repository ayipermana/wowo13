
@extends('navbar')
@section('navbar')
<section class="py-3">
    <div class="container px-4 px-lg-5 my-3">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" />
                <img src="storage/{{$detail->foto}}" alt="" width="200">
                
            </div>
            <div class="col-md-6">
                <div class="small mb-1">PRODUK TERLARIS</div>
                <h1 class="display-5 fw-bolder">{{$detail->nama}}</h1>
                <div class="fs-5 mb-5">
                    Rp.
                    <span class="">{{$detail->harga}}</span>
                    
                </div>
                <p class="lead">{{$detail->deskripsi}}</p>
                <div class="d-flex">
                   
                    <a href="https://api.whatsapp.com/send?phone=6285803381260&text=%22halloo%22" type="button" class="btn btn-primary" data-bsdismiss="modal">BELI SEKARANG</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
                   
                
                    
    