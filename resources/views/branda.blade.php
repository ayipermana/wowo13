

@extends('navbar')
@section('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyShop - Alamsyah Firdaus</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">

	
</head>
<body>
    <section id="home" class="bg-transparent py-3">
	    <div class="container px-3 px-lg-5" style="">
	    	<img src="assets/logo.jpeg" alt="" class="d-block rounded" height="">
	    </div>
	</section>
	</section>
	<section id="shop" class="py-3">
        <div class="container px-4 px-lg-5 mt-3">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                
                
                @foreach($branda as $item)
                <div class="col mb-5">
	                <div class="card h-100">
	                    <div class="badge bg-primary text-white position-absolute">Sale</div>
	                    <img src="storage/{{$item->foto}}" class="card-img-top" alt="">
	                    <div class="card-body p-4">
	                        <div class="text-center">
	                            <h5 class="fw-bolder">{{$item->nama}}</h5>
	                            <div class="d-flex justify-content-center small text-warning mb-2">
	                                <div class="bi-star-fill"></div>
	                                <div class="bi-star-fill"></div>
	                                <div class="bi-star-fill"></div>
	                                <div class="bi-star-fill"></div>
	                                <div class="bi-star-half"></div>
	                            </div>
	                            <span class="">{{$item->harga}}</span>
	                            
	                        </div>
	                    </div>
	                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
	                        <div class="text-center"><a class="btn btn-outline-primary mt-auto" href="detail{{$item->id}}">BELI</a></div>
	                    </div>
	                </div>
	            </div>
                @endforeach

	        </div>
	    </div>

	</section>
	<!-- Akhir Shop -->

	<!-- Footer-->
	<footer class="bg-transparent py-3">
	    <div class="container"><p class="m-0 text-center text-primary">Copyright &copy; Ayi Permana</p></div>
	</footer>
	<!-- Akhir Footer -->

</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</html>
@endsection
