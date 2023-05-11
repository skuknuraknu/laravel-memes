<div class="col-xxl-3 col-xl-3 col-lg-4 col-6 cus-z2">
                    <div class="d-inline-block">
                        <button class="button profile-active mb-4 mb-lg-0 d-flex align-items-center gap-2">
                            <i class="material-symbols-outlined mat-icon"> tune </i>
                            <span>My profile</span>
                        </button>
                    </div>
                    <div class="profile-sidebar cus-scrollbar p-5">
                        <div class="d-block d-lg-none position-absolute end-0 top-0">
                            <button class="button profile-close">
                                <i class="material-symbols-outlined mat-icon fs-xl"> close </i>
                            </button>
                        </div>
                        <div class="profile-pic d-flex gap-2 align-items-center">
                            <div class="avatar position-relative">
                                <img class="avatar-img max-un" src="assets/images/avatar-1.png" alt="avatar">
                            </div>
                            <div class="text-area">
                                <h6 class="m-0 mb-1"><a href="profile-post.html">{{ Auth()->user()->name }}</a></h6>
                                <p class="mdtxt">{{ Auth()->user()->email }}</p>
                            </div>
                        </div>
                        <ul class="profile-link mt-7 mb-7 pb-7">
                            <li>
                                <a href="/" class="d-flex gap-4">
                                    <i class="material-symbols-outlined mat-icon"> home </i>
                                    <span>Home</span>
                                </a>
                            </li>
                           
                            <li>
                                <a href="{{ route("photo.index") }}" class="d-flex gap-4">
                                    <i class="material-symbols-outlined mat-icon"> Movie </i>
                                    <span>Meme kamu</span>
                                </a>
                            </li>
                        </ul>
                        {{-- <div class="your-shortcuts">
                            <h6>Your shortcuts</h6>
                            <ul>
                                <li>
                                    <a href="public-profile-post.html" class="d-flex align-items-center gap-3">
                                        <img src="assets/images/shortcuts-1.png" alt="icon">
                                        <span>Game Community</span>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>