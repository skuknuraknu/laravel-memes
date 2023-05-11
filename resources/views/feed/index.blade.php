@extends('master-layout.index')
@section('title') Feed @endsection
@section("post")
@foreach($memes as $item)
	<div class="post-single-box p-3 p-sm-5">
   	<div class="top-area pb-5">
		<div class="profile-area d-center justify-content-between">
			<div class="avatar-item d-flex gap-3 align-items-center">
			<div class="avatar position-relative">
				<img class="avatar-img max-un" src="assets/images/avatar-1.png" alt="avatar">
            </div>
            <div class="info-area">
            	<h6 class="m-0"><a href="#">{{ $item->name }}</a></h6>
            	<span class="mdtxt status">{{ $item->created_at->format('Y-m-d') }}</span>
            </div>
        </div>
		<div class="btn-group cus-dropdown">
			<button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
			<i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
			</button>
			<ul class="dropdown-menu p-4 pt-2">
                <li>
					<a class="droplist d-flex align-items-center gap-2" href="#">
					<i class="material-symbols-outlined mat-icon"> flag </i>
					<span>Report Post</span>
					</a>
				</li>
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
             <form action="/feed/komentar" method="post">
                @csrf
                <div class="d-flex mt-5 gap-3">
                    <div class="profile-box d-none d-xxl-block">
                        <a href="#"><img src="assets/images/add-post-avatar.png" class="max-un" alt="icon"></a>
                    </div>
                    <div class="form-content input-area py-1 d-flex gap-2 align-items-center w-100">
                        <input type="text" name="id_user" value="{{ Auth()->user()->id }}" hidden>
                        <input type="text" name="id_video" value="{{ $item->id_admin }}" hidden>
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
   @endforeach
@endsection