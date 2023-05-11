@extends("master-layout.index")
@section('title') Meme | Kamu @endsection
@section('post')
	@foreach($memes as $item)
	<div class="post-single-box p-sm-5">
   	<div class="top-area pb-5">
		<div class="profile-area d-center justify-content-between">
			<div class="avatar-item d-flex gap-3 align-items-center">
			<div class="avatar position-relative">
				<img class="avatar-img max-un" src="assets/images/avatar-1.png" alt="avatar">
            </div>
            <div class="info-area">
            	<h6 class="m-0"><a href="public-profile-post.html">{{ $item->name }}</a></h6>
            	<span class="mdtxt status">{{ $item->created_at->format('Y-m-d') }}</span>
            </div>
        </div>
		<div class="btn-group cus-dropdown">
			<button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
			<i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
			</button>
			<ul class="dropdown-menu p-4 pt-2">
                @if(Auth()->user()->id == $item->id_user)
                <li  data-bs-toggle="modal" data-bs-target="#edit">
                	<a class="droplist d-flex align-items-center gap-2">
						{{-- <input type="text" value="{{ $item->id }}" name="id" hidden> --}}
					<i class="material-symbols-outlined mat-icon"> flag </i>
					<span>Edit</span>
					</a>
				</li>
                <li>
                	<form action="{{ route('photo.hapus') }}" method="post">
                	@csrf
					<button style="border:none" type="submit"><a class="droplist d-flex align-items-center gap-2">
						<input type="text" value="{{ $item->id }}" name="id" hidden>
					<i class="material-symbols-outlined mat-icon"> flag </i>
					<span>Hapus</span>
					</a>
					</button>
                	</form>
				</li>
				@endif
			</ul>
		</div>
		</div>
		<div class="py-4">
            <p class="description">{{ $item->desc_photo }}</p>
            <p class="hastag d-flex gap-2"><a>{{ $item->tags_photo }}</a></p>
		</div>
		@if(!$item->url == "")
		{{-- video player --}}
		<div class="post-img video-item">
		<div class="plyr__video-embed player">
			<iframe src="https://www.youtube.com/embed/{{ $item->url }}"></iframe>
		</div>
		</div>
		@else
		<div class="post-img video-item">
		<img src="{{ asset('uploads/'.$item->path_photo) }}" alt="">
		</div>
		@endif
	</div>                      
    <div class="like-comment-share py-5 d-center flex-wrap gap-3 gap-md-0 justify-content-between">
        <button class="d-center gap-1 gap-sm-2 mdtxt">
            <i class="material-symbols-outlined mat-icon"> favorite </i>
            Like
            </button>
            <button class="d-center gap-1 gap-sm-2 mdtxt">
            <i class="material-symbols-outlined mat-icon"> chat </i>
                Comment
            </button>
            </div>
            <form action="{{ route('photo.comment') }}" method="post">
                @csrf
                <div class="d-flex mt-5 gap-3">
                    <div class="profile-box d-none d-xxl-block">
                        <a href="#"><img src="assets/images/add-post-avatar.png" class="max-un" alt="icon"></a>
                    </div>
                    <div class="form-content input-area py-1 d-flex gap-2 align-items-center w-100">
                        <input type="text" name="id_user" value="{{ $item->id_user }}" hidden>
                        <input type="text" name="id_video" value="{{ $item->id }}" hidden>
                        <input name="comment" placeholder="Tulis komentar mu...">
                    </div>
                    <div class="btn-area d-flex">
                        <button type="submit" class="cmn-btn px-2 px-sm-5 px-lg-6">
                            <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                        </button>
                    </div>
                </div>
            </form>

            @foreach($item->comments as $comment)
            <div class="comments-area mt-5">
                <div class="single-comment-area ms-1 ms-xxl-15">
                                    <div class="d-flex gap-4">
                                        <div class="avatar-item d-center align-items-baseline">
                                            <img class="avatar-img max-un" src="assets/images/avatar-3.png" alt="avatar">
                                        </div>
                                        <div class="info-item w-100">
                                            <div class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                                <div class="title-area">
                                                    <h6 class="m-0 mb-3"><a href="#">{{ $comment->nama_user }}</a></h6>
                                <p class="mdtxt">{{ $comment->komentar }}</p>
                                                </div>
                                                <div class="btn-group dropend cus-dropdown">
                                                    <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                                <span>Hide Comments</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> flag </i>
                                                                <span>Report Comments</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
    </div>
    {{-- edit modal  --}}
    <div class="go-live-popup">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="modal cmn-modal fade" id="edit">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content p-5">
                                <div class="modal-header justify-content-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="material-symbols-outlined mat-icon xxltxt"> close </i>
                                    </button>
                                </div>
                                <div class="top-content pb-5">
                                    <h5>Edit data</h5>
                                </div>
                                <form action="{{ route('meme_kamu.edit_process') }}" method="post">
                                    @csrf
                                    <div class="mid-area">
                                        <input type="text" name="id" value="{{ $item->id }}" hidden>
                                    <span>Judul meme</span>
                                    <div class="d-flex mb-5 gap-3">
                                        <input value="{{ $item->nama_photo }}" type="text" name="nama_photo" placeholder="Judul meme kamu..">  
                                    </div>
                                    {{-- deskripsi meme --}}
                                    <span>Deskripsi meme</span>
                                    <div class="d-flex mb-5 gap-3">
                                        {{-- <div class="profile-box">
                                            <a href="#"><img src="assets/images/add-post-avatar.png" class="max-un" alt="icon"></a>
                                        </div> --}}
                                        <textarea name="desc_photo" cols="10" rows="2" placeholder="Deskripsi meme">{{ $item->desc_photo }}</textarea>
                                    </div>
                                    {{-- hastags --}}
                                    <span>Tags meme</span>
                                    <div class="d-flex mb-5 gap-3 mt-2">
                                        <input value="{{ $item->tags_photo }}" type="text" name="tags_photo" placeholder="Diawali dengan #..">  
                                    </div>
                                </div>
                                <div class="footer-area d-flex justify-content-between pt-5">
                                    <div class="left-area">
                                        <select name="status">
                                            <option value="0" @if($item->is_private == 0) selected @endif>Public</option>
                                            <option value="1" @if($item->is_private == 1) selected @endif>Private</option>
                                        </select>
                                    </div>
                                    <div class="btn-area d-flex justify-content-end gap-2">
                                        <button type="button" class="cmn-btn alt" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                        <button type="submit" class="cmn-btn">Edit</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	@endforeach

	
@endsection
@push("scripts")
	{{-- @include('photo.script') --}}
@endpush