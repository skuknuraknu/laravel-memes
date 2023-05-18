<div class="col-xxl-5 col-xl-6 col-lg-8 d-flex flex-column gap-7 mt-0 mt-lg-12 mt-xl-0">
    {{-- story --}}
    <div class="story-carousel">
        <div class="single-item">
            <div class="single-slide">
                <a href="#" class="position-relative d-center">
                <img class="bg-img" src="{{  asset('assets/images/story-slider-owner.png')}}" alt="icon">
                <div class="abs-area d-grid p-3 position-absolute bottom-0">
                    <div class="icon-box m-auto d-center mb-3">
                        <i class="material-symbols-outlined text-center mat-icon"> add </i>
                    </div>
                    <span class="mdtxt">Add Story</span>
                </div>
                </a>
            </div>
        </div>
    </div>
    {{-- upload --}}
    <div class="share-post d-flex gap-3 gap-sm-5 p-3 p-sm-5">
        <div class="profile-box">
            <a href="#"><img src="{{  asset('assets/images/add-post-avatar.png')}}" class="max-un" alt="icon"></a>
        </div>
        <form action="#" class="w-100 position-relative">
            <span>Upload meme kamu</span>
            <ul class="d-flex justify-content-between flex-wrap mt-3 gap-3">
                <li class="d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#post">
                    <img src="{{  asset('assets/images/icon/vgallery.png')}}" class="max-un" alt="icon">
                    <span>Photo/Video</span>
                </li>
            </ul>
        </form>
    </div>
    <div class="go-live-popup">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="modal cmn-modal fade" id="post">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content p-5">
                                <div class="modal-header justify-content-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="material-symbols-outlined mat-icon xxltxt"> close </i>
                                    </button>
                                </div>
                                {{-- upload meme --}}
                                <form method="post" action="{{ route('photo.upload') }}" enctype="multipart/form-data">
                                <div class="top-content pb-5">
                                    <h5>Upload meme kamu disini</h5>
                                </div>
                                <div class="mid-area">
                                    @csrf
                                    {{-- video meme --}}
                                    <span>ID url youtube <sup>(biarkan kosong jika tidak ada)</sup></span>
                                    <div class="d-flex mb-5 gap-3">
                                        <input type="text" name="url" placeholder="Paste id dari url video youtube mu ..">  
                                    </div>
                                    {{-- judul meme --}}
                                    <span>Judul meme</span>
                                    <div class="d-flex mb-5 gap-3">
                                        <input type="text" name="nama_photo" placeholder="Judul meme kamu..">  
                                    </div>
                                    {{-- deskripsi meme --}}
                                    <span>Deskripsi meme</span>
                                    <div class="d-flex mb-5 gap-3">
                                        {{-- <div class="profile-box">
                                            <a href="#"><img src="assets/images/add-post-avatar.png" class="max-un" alt="icon"></a>
                                        </div> --}}
                                        <textarea name="desc_photo" cols="10" rows="2" placeholder="Deskripsi meme"></textarea>
                                    </div>
                                    {{-- gambar --}}
                                    <div class="file-upload">
                                        <label>Upload gambar jika ada</label>
                                        <label class="file mt-1">
                                            <input type='file' name="meme" id="imageUpload" accept=".png, .jpg, .jpeg" >
                                            <span class="file-custom pt-8 pb-8 d-grid text-center">
                                                <i class="material-symbols-outlined mat-icon"> perm_media </i>
                                                <span>Seret gambar mu kesini</span>
                                            </span>
                                        </label>
                                    </div>
                                    {{-- hastags --}}
                                    <span>Tags meme</span>
                                    <div class="d-flex mb-5 gap-3 mt-2">
                                        <input type="text" name="tags_photo" placeholder="Diawali dengan #..">  
                                    </div>
                                </div>
                                {{-- status --}}
                                <div class="footer-area d-flex justify-content-between pt-5">
                                    <div class="left-area">
                                        <select name="status">
                                            <option value="0">Public</option>
                                            <option value="1">Private</option>
                                        </select>
                                    </div>
                                    <div class="btn-area d-flex justify-content-end gap-2">
                                        <button type="button" class="cmn-btn alt" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                        <button type="submit" class="cmn-btn">Post</button>
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
    <div class="post-item d-flex flex-column gap-5 gap-md-7">
        @yield("post")
    </div>
</div>