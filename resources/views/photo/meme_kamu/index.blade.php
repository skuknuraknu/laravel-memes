@extends("master-layout.index")
@section('title') Meme | Meme kamu @endsection
@include('photo.css')
@section('content')
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Meme milik kamu >_<</div>
    </div>
    <div class="card radius-10">
    	@if(session()->has('message'))
			<div class="rounded bg-primary text-light px-4 py-1">{{ session()->get('message') }}</div>
		@elseif(session()->has('errors'))
			<div class="rounded bg-danger text-light px-4 py-1 text-light">{{ session()->get('errors')->first() }}</div>
		@else
			<div></div>
		@endif
        <div class="card-header py-3">
            <div class="row align-items-center g-3">
                <div class="col-12 col-lg-6">
                   	<h5 class="mb-0">Ingin upload meme? <a href="{{ route("photo.index")}}" class="btn btn-success px-4 py-1 rounded" style="font-size: 12px;">UPLOAD</a></h5>
                </div>
          	</div>
        </div>
        <div class="card-body">
        	<div class="container">
    			<div class="row align-items-center g-3">
	                @foreach($photos as $photo)
	                <div class="col-3 col-lg-3">
	                	<div class="card">
	                		<span class="lead px-2">{{ $photo->nama_photo }}</span>
	                    	<img class="ml-2 rounded" src="{{ asset('uploads/'.$photo->path_photo) }}" width="190">
	                    	<pre>{{ $photo->desc_photo }}</pre>
	                    	<a href="{{ route("meme_kamu.edit", $photo->id) }}" class="btn btn-warning px-4 py-1">edit</a>
	                    	<form action="{{ route("photo.delete", $photo->id) }}" method="post">
	                    		@csrf
	                    			<button class="btn btn-danger px-4 py-1">hapus</button>
	                    		</form>
	                	</div>
	                </div>
	                @endforeach
          		</div>	
			</div>
        </div>
    </div>
@endsection
@push("scripts")
	@include('photo.script')
@endpush