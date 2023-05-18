@extends("master-layout.index")
@section('title') Meme | Marketplace @endsection
@section('post')
<div class="col-xxl-5 col-xl-6 col-lg-8 d-flex flex-column gap-7 mt-0 mt-lg-12 mt-xl-0">
	<div class="col-xl-9 col-lg-8">
		<div class="head-area mb-5"><h6>Marketplace</h6></div>
		<div class="row cus-mar">
			@foreach($market as $item)
			<div class="col-xl-6 col-lg-8 col-md-6">
			 	<div class="single-box marketplace-item p-2 p-sm-5">
					<div class="avatar-area position-relative">
						<img class="avatar-img w-100" src="{{ asset('assets/images/'.$item->gambar_barang) }}" alt="avatar">
						<h6 class="position-absolute price-box">Rp. {{ $item->harga_barang }}</h6>
					</div>
					<div class="info-box mt-12 text-start">
						<a href="#"><span>{{ $item->nama_barang }}</span></a>
                    </div>
                    <div class="head-area mt-5 d-flex justify-content-between">
						<div class="d-flex w-100 gap-3 align-items-center justify-content-between">
						<div class="d-flex gap-3 align-items-center">
							<div class="avatar-item"><img class="avatar-img max-un" src="assets/images/avatar-6.png" alt="avatar"></div>
							<div class="text-area text-start">
								<p class="mdtxt">{{ $item->name }}</p>
							</div>
						</div>
						{{-- <div class="star-area">
							<a href="javascript:void(0)"><i class="fas fa-star"></i></a>
							<a href="javascript:void(0)"><i class="fas fa-star"></i></a>
							<a href="javascript:void(0)"><i class="fas fa-star"></i></a>
							<a href="javascript:void(0)"><i class="fas fa-star"></i></a>
							<a href="javascript:void(0)"><i class="fas fa-star"></i></a>
						</div> --}}
						</div>
					</div>
			</div>			
		</div>
		@endforeach
	</div>
	</div>
</div>
@endsection