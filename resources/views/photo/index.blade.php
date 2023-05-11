@extends("master-layout.index")
@section('title') Meme | Upload photo @endsection
@include('photo.css')
@section('content')
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Upload meme kamu disini</div>
    </div>
    <div class="card radius-10">
        <div class="card-header py-3">
            <div class="row align-items-center g-3">
                <div class="col-12 col-lg-6">
                   	<h5 class="mb-0">Upload meme</h5>
                </div>
          	</div>
        </div>
        <div class="card-body">
        	<div class="container">
    			<div class="avatar-upload">
        			<div class="avatar-edit">
            			<label for="imageUpload"></label>
        			</div>
        			<div class="avatar-preview">
            			<div id="imagePreview" style="background-image: url(https://wealthofgeeks.com/wp-content/uploads/2022/07/spongebob-rainbow-meme-imagination.jpg);">
            			</div>
        			</div>
    			</div>
			</div>
			@if(session()->has('message'))
					<div class="rounded bg-primary px-4 py-1">{{ session()->get('message') }}</div>
				@elseif(session()->has('errors'))
					<div class="rounded bg-danger px-4 py-1 text-light">{{ session()->get('errors')->first() }}</div>
				@else
					<div></div>
				@endif
			<div class="container">
				<form method="post" action="{{ route('photo.upload') }}" enctype="multipart/form-data">
					@csrf
					<input style="margin-top:-40px" type='file' name="meme" id="imageUpload" accept=".png, .jpg, .jpeg" />
					<div class="form-group mb-2">
						<input type="text" name="nama_photo" class="form-control" placeholder="Judul meme kamu...">
					</div>
					<div class="form-group mb-2">
						<textarea name="desc_photo" class="form-control" placeholder="Deskripsi meme kamu..."></textarea>
					</div>
					<div class="form-group mb-2">
						<input type="text" name="tags_photo" class="form-control" placeholder="Tags meme kamu...">
					</div>
					<button class="btn btn-primary px-3 py-2 text-light w-100">UPLOAD</button>
				</form>
			</div>
        </div>
    </div>
@endsection
@push("scripts")
	@include('photo.script')
@endpush