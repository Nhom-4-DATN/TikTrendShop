@extends('site.layout.layout')

@section('title', 'Bài đăng')

@section('content')
    <!-- loader wrapper -->
    <div class="preloader-wrap p-3">
        <div class="box shimmer">
            <div class="lines">
                <div class="line s_shimmer"></div>
                <div class="line s_shimmer"></div>
                <div class="line s_shimmer"></div>
                <div class="line s_shimmer"></div>
            </div>
        </div>
        <div class="box shimmer mb-3">
            <div class="lines">
                <div class="line s_shimmer"></div>
                <div class="line s_shimmer"></div>
                <div class="line s_shimmer"></div>
                <div class="line s_shimmer"></div>
            </div>
        </div>
        <div class="box shimmer">
            <div class="lines">
                <div class="line s_shimmer"></div>
                <div class="line s_shimmer"></div>
                <div class="line s_shimmer"></div>
                <div class="line s_shimmer"></div>
            </div>
        </div>
    </div>
    <!-- loader wrapper -->
    <div class="container mx-auto row feed-body">
        <div class="col-xl-8 col-xxl-9 col-lg-8">
            <div class="card w-100 shadow-none bg-transparent bg-transparent-card border-0 p-0 mb-0">
                <div class="owl-carousel category-card owl-theme overflow-hidden nav-none d-flex flex-row">
                    <div class="item">
                        <div data-bs-toggle="modal"
                            class="card w125 h200 d-block border-0 shadow-none rounded-xxxl bg-secondary-emphasis overflow-hidden mb-3 mt-3 position-relative"
                            style="background-image: url(images/str-banner.png);">
                            <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center text-white">
                                <div class="arrow-right"></div>
                                <div class="icon-highlight">
                                    <!-- Thêm icon nổi bật của bạn ở đây -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Đăng bài --}}
            <div class="card w-100 shadow-xss rounded-xxl border-0 ps-4 pt-4 pe-4 pb-3 mb-3">
                <div class="card-body p-0">
                    <a href="{{route('manager.blog.create')}}" class="font-xssss fw-600  card-body p-0 d-flex align-items-center">
                        <i class="btn-round-sm font-xs text-primary feather-edit-3 me-2 bg-greylight"></i>Đăng bài</a>
                </div>
                <!-- Rest of the code -->
                <div class="card-body p-0 mt-3 position-relative">
                    <figure class="avatar position-absolute ms-2 mt-1 top-5"><img src="images/user-8.png" alt="image"
                            class="shadow-sm rounded-circle w30"></figure>
                    <textarea name="message"
                        class="h100 bor-0 w-100 rounded-xxl p-2 ps-5 font-xssss text-grey-500 fw-500 border-light-md theme-dark-bg"
                        cols="30" rows="10" placeholder="Bạn đang nghĩ gì?"></textarea>
                </div>
                <div class="card-body d-flex p-0 mt-0">
                    <a href="#"
                        class="d-flex align-items-center font-xssss fw-600 ls-1 text-grey-700 text-dark pe-4"><i
                            class="font-md text-danger feather-video me-2"></i><span class="d-none-xs">Live
                            Video</span></a>
                    <a href="#"
                        class="d-flex align-items-center font-xssss fw-600 ls-1 text-grey-700 text-dark pe-4"><i
                            class="font-md text-success feather-image me-2"></i><span
                            class="d-none-xs">Photo/Video</span></a>
                    <a href="#"
                        class="d-flex align-items-center font-xssss fw-600 ls-1 text-grey-700 text-dark pe-4"><i
                            class="font-md text-warning feather-camera me-2"></i><span
                            class="d-none-xs">Feeling/Activity</span></a>
                    <a href="#" class="ms-auto" id="dropdownMenu4" data-bs-toggle="dropdown" aria-expanded="false"><i
                            class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss"></i></a>
                    <div class="dropdown-menu dropdown-menu-start p-4 rounded-xxl border-0 shadow-lg"
                        aria-labelledby="dropdownMenu4">
                        <div class="card-body p-0 d-flex">
                            <i class="feather-bookmark text-grey-500 me-3 font-lg"></i>
                            <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Save Link <span
                                    class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Add this to your
                                    saved items</span></h4>
                        </div>
                        <div class="card-body p-0 d-flex mt-2">
                            <i class="feather-alert-circle text-grey-500 me-3 font-lg"></i>
                            <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide Post <span
                                    class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to your
                                    saved items</span></h4>
                        </div>
                        <div class="card-body p-0 d-flex mt-2">
                            <i class="feather-alert-octagon text-grey-500 me-3 font-lg"></i>
                            <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide all from Group <span
                                    class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to your
                                    saved items</span></h4>
                        </div>
                        <div class="card-body p-0 d-flex mt-2">
                            <i class="feather-lock text-grey-500 me-3 font-lg"></i>
                            <h4 class="fw-600 mb-0 text-grey-900 font-xssss mt-0 me-4">Unfollow Group <span
                                    class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to your
                                    saved items</span></h4>
                        </div>
                    </div>
                </div>
            </div>


            {{-- shop --}}
            <div class="card w-100 shadow-none bg-transparent bg-transparent-card border-0 p-0 mb-0">
                <div class="owl-carousel category-card owl-theme overflow-hidden nav-none">
                    <div class="item">
                        <div class="card w200 d-block border-0 shadow-xss rounded-xxl overflow-hidden mb-3 me-2 mt-3">
                            <div class="card-body position-relative h100 bg-image-cover bg-image-center"
                                style="background-image: url(images/u-bg.jpg);"></div>
                            <div class="card-body d-block w-100 ps-4 pe-4 pb-4 text-center">
                                <figure class="avatar ms-auto me-auto mb-0 mt--6 position-relative w75 z-index-1">
                                    <img src="images/user-11.png" alt="image"
                                        class="float-right p-1 bg-white rounded-circle w-100">
                                </figure>
                                <div class="clearfix"></div>
                                <h4 class="fw-700 font-xsss mt-2 mb-1">Aliqa Macale </h4>
                                <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                <span
                                    class="live-tag mt-2 mb-0 bg-danger p-2 z-index-1 rounded-3 text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                <div class="clearfix mb-2"></div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card w200 d-block border-0 shadow-xss rounded-xxl overflow-hidden mb-3 me-2 mt-3">
                            <div class="card-body position-relative h100 bg-image-cover bg-image-center"
                                style="background-image: url(images/s-2.jpg);"></div>
                            <div class="card-body d-block w-100 ps-4 pe-4 pb-4 text-center">
                                <figure class="avatar ms-auto me-auto mb-0 mt--6 position-relative w75 z-index-1">
                                    <img src="images/user-2.png" alt="image"
                                        class="float-right p-1 bg-white rounded-circle w-100">
                                </figure>
                                <div class="clearfix"></div>
                                <h4 class="fw-700 font-xsss mt-2 mb-1">Seary Victor </h4>
                                <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                <span
                                    class="live-tag mt-2 mb-0 bg-danger p-2 z-index-1 rounded-3 text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                <div class="clearfix mb-2"></div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card w200 d-block border-0 shadow-xss rounded-xxl overflow-hidden mb-3 me-2 mt-3">
                            <div class="card-body position-relative h100 bg-image-cover bg-image-center"
                                style="background-image: url(images/s-6.jpg);"></div>
                            <div class="card-body d-block w-100 ps-4 pe-4 pb-4 text-center">
                                <figure class="avatar ms-auto me-auto mb-0 mt--6 position-relative w75 z-index-1">
                                    <img src="images/user-3.png" alt="image"
                                        class="float-right p-1 bg-white rounded-circle w-100">
                                </figure>
                                <div class="clearfix"></div>
                                <h4 class="fw-700 font-xsss mt-2 mb-1">John Steere </h4>
                                <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                <span
                                    class="live-tag mt-2 mb-0 bg-danger p-2 z-index-1 rounded-3 text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                <div class="clearfix mb-2"></div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card w200 d-block border-0 shadow-xss rounded-xxl overflow-hidden mb-3 me-2 mt-3">
                            <div class="card-body position-relative h100 bg-image-cover bg-image-center"
                                style="background-image: url(images/bb-16.png);"></div>
                            <div class="card-body d-block w-100 ps-4 pe-4 pb-4 text-center">
                                <figure class="avatar ms-auto me-auto mb-0 mt--6 position-relative w75 z-index-1">
                                    <img src="images/user-4.png" alt="image"
                                        class="float-right p-1 bg-white rounded-circle w-100">
                                </figure>
                                <div class="clearfix"></div>
                                <h4 class="fw-700 font-xsss mt-2 mb-1">Mohannad Zitoun </h4>
                                <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                <span
                                    class="live-tag mt-2 mb-0 bg-danger p-2 z-index-1 rounded-3 text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                <div class="clearfix mb-2"></div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card w200 d-block border-0 shadow-xss rounded-xxl overflow-hidden mb-3 me-2 mt-3">
                            <div class="card-body position-relative h100 bg-image-cover bg-image-center"
                                style="background-image: url(images/e-4.jpg);"></div>
                            <div class="card-body d-block w-100 ps-4 pe-4 pb-4 text-center">
                                <figure class="avatar ms-auto me-auto mb-0 mt--6 position-relative w75 z-index-1">
                                    <img src="images/user-7.png" alt="image"
                                        class="float-right p-1 bg-white rounded-circle w-100">
                                </figure>
                                <div class="clearfix"></div>
                                <h4 class="fw-700 font-xsss mt-2 mb-1">Studio Express </h4>
                                <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                <span
                                    class="live-tag mt-2 mb-0 bg-danger p-2 z-index-1 rounded-3 text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                <div class="clearfix mb-2"></div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card w200 d-block border-0 shadow-xss rounded-xxl overflow-hidden mb-3 me-2 mt-3">
                            <div class="card-body position-relative h100 bg-image-cover bg-image-center"
                                style="background-image: url(images/coming-soon.png);"></div>
                            <div class="card-body d-block w-100 ps-4 pe-4 pb-4 text-center">
                                <figure class="avatar ms-auto me-auto mb-0 mt--6 position-relative w75 z-index-1">
                                    <img src="images/user-5.png" alt="image"
                                        class="float-right p-1 bg-white rounded-circle w-100">
                                </figure>
                                <div class="clearfix"></div>
                                <h4 class="fw-700 font-xsss mt-2 mb-1">Hendrix Stamp </h4>
                                <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                <span
                                    class="live-tag mt-2 mb-0 bg-danger p-2 z-index-1 rounded-3 text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                <div class="clearfix mb-2"></div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card w200 d-block border-0 shadow-xss rounded-xxl overflow-hidden mb-3 me-2 mt-3">
                            <div class="card-body position-relative h100 bg-image-cover bg-image-center"
                                style="background-image: url(images/bb-9.jpg);"></div>
                            <div class="card-body d-block w-100 ps-4 pe-4 pb-4 text-center">
                                <figure class="avatar ms-auto me-auto mb-0 mt--6 position-relative w75 z-index-1">
                                    <img src="images/user-6.png" alt="image"
                                        class="float-right p-1 bg-white rounded-circle w-100">
                                </figure>
                                <div class="clearfix"></div>
                                <h4 class="fw-700 font-xsss mt-2 mb-1">Mohannad Zitoun </h4>
                                <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                <span
                                    class="live-tag mt-2 mb-0 bg-danger p-2 z-index-1 rounded-3 text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                <div class="clearfix mb-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- blog --}}
            <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-0">
                <div class="card-body p-0 d-flex">
                    <figure class="avatar me-3"><img src="images/user-8.png" alt="image"
                            class="shadow-sm rounded-circle w45"></figure>
                    <h4 class="fw-700 text-grey-900 font-xssss mt-1">jindep <span
                            class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">2 hour ago</span></h4>
                    <a href="#" class="ms-auto"><i
                            class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss"></i></a>
                </div>

                <div class="card-body p-0 me-lg-5">
                    <p class="fw-500 text-grey-500 lh-26 font-xssss w-100">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi.
                        Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus <a href="#"
                            class="fw-600 text-primary ms-2">See more</a></p>
                </div>
                <div class="card-body d-block p-0 mb-3">
                    <div class="row ps-2 pe-2">
                        <div class="col-xs-6 col-sm-6 p-1"><a href="images/t-36.jpg" data-lightbox="roadtri"><img
                                    src="images/t-21.jpg" class="rounded-3 w-100" alt="image"></a></div>
                        <div class="col-xs-6 col-sm-6 p-1"><a href="images/t-32.jpg" data-lightbox="roadtri"><img
                                    src="images/t-22.jpg" class="rounded-3 w-100" alt="image"></a></div>
                    </div>
                    <div class="row ps-2 pe-2">
                        <div class="col-xs-4 col-sm-4 p-1"><a href="images/t-33.jpg" data-lightbox="roadtri"><img
                                    src="images/t-23.jpg" class="rounded-3 w-100" alt="image"></a></div>
                        <div class="col-xs-4 col-sm-4 p-1"><a href="images/t-34.jpg" data-lightbox="roadtri"><img
                                    src="images/t-24.jpg" class="rounded-3 w-100" alt="image"></a></div>
                        <div class="col-xs-4 col-sm-4 p-1"><a href="images/t-35.jpg" data-lightbox="roadtri"
                                class="position-relative d-block"><img src="images/t-25.jpg" class="rounded-3 w-100"
                                    alt="image"><span
                                    class="img-count font-sm text-white ls-3 fw-600"><b>+2</b></span></a></div>
                    </div>
                </div>
                <div class="card-body d-flex p-0">
                    <a href="#"
                        class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"><i
                            class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i>
                        <i class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K
                        Like</a>
                    <div class="emoji-wrap">
                        <ul class="emojis list-inline mb-0">
                            <li class="emoji list-inline-item"><i class="em em---1"></i> </li>
                            <li class="emoji list-inline-item"><i class="em em-angry"></i></li>
                            <li class="emoji list-inline-item"><i class="em em-anguished"></i> </li>
                            <li class="emoji list-inline-item"><i class="em em-astonished"></i> </li>
                            <li class="emoji list-inline-item"><i class="em em-blush"></i></li>
                            <li class="emoji list-inline-item"><i class="em em-clap"></i></li>
                            <li class="emoji list-inline-item"><i class="em em-cry"></i></li>
                            <li class="emoji list-inline-item"><i class="em em-full_moon_with_face"></i></li>
                        </ul>
                    </div>
                    <a href="#" class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                            class="feather-message-circle text-dark text-grey-900 btn-round-sm font-lg"></i><span
                            class="d-none-xss">22 Comment</span></a>
                    <a href="#"
                        class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                            class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span
                            class="d-none-xs">Share</span></a>
                </div>
            </div>


        </div>
        <div class="col-xl-4 col-xxl-3 col-lg-4 ps-lg-0">
            <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                            <div class="card-body d-flex align-items-center p-4">
                                <h4 class="fw-700 mb-0 font-xssss text-grey-900">Friend Request</h4>
                                <a href="default-member.html" class="fw-600 ms-auto font-xssss text-primary">See all</a>
                            </div>
                            <div class="card-body d-flex pt-4 ps-4 pe-4 pb-0 border-top-xs bor-0">
                                <figure class="avatar me-3"><img src="images/user-7.png" alt="image"
                                        class="shadow-sm rounded-circle w45"></figure>
                                <h4 class="fw-700 text-grey-900 font-xssss mt-1">Anthony Daugloi <span
                                        class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">12 mutual friends</span>
                                </h4>
                            </div>
                            <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                                <a href="#"
                                    class="p-2 lh-20 w100 bg-primary-gradiant me-2 text-white text-center font-xssss fw-600 ls-1 rounded-xl">Confirm</a>
                                <a href="#"
                                    class="p-2 lh-20 w100 bg-grey text-grey-800 text-center font-xssss fw-600 ls-1 rounded-xl">Delete</a>
                            </div>

                            <div class="card-body d-flex pt-0 ps-4 pe-4 pb-0">
                                <figure class="avatar me-3"><img src="images/user-8.png" alt="image"
                                        class="shadow-sm rounded-circle w45"></figure>
                                <h4 class="fw-700 text-grey-900 font-xssss mt-1">Mohannad Zitoun <span
                                        class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">12 mutual friends</span>
                                </h4>
                            </div>
                            <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                                <a href="#"
                                    class="p-2 lh-20 w100 bg-primary-gradiant me-2 text-white text-center font-xssss fw-600 ls-1 rounded-xl">Confirm</a>
                                <a href="#"
                                    class="p-2 lh-20 w100 bg-grey text-grey-800 text-center font-xssss fw-600 ls-1 rounded-xl">Delete</a>
                            </div>

                            <div class="card-body d-flex pt-0 ps-4 pe-4 pb-0">
                                <figure class="avatar me-3"><img src="images/user-12.png" alt="image"
                                        class="shadow-sm rounded-circle w45"></figure>
                                <h4 class="fw-700 text-grey-900 font-xssss mt-1">Mohannad Zitoun <span
                                        class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">12 mutual friends</span>
                                </h4>
                            </div>
                            <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                                <a href="#"
                                    class="p-2 lh-20 w100 bg-primary-gradiant me-2 text-white text-center font-xssss fw-600 ls-1 rounded-xl">Confirm</a>
                                <a href="#"
                                    class="p-2 lh-20 w100 bg-grey text-grey-800 text-center font-xssss fw-600 ls-1 rounded-xl">Delete</a>
                            </div>
                        </div>

                        <div class="card w-100 shadow-xss rounded-xxl border-0 p-0 ">
                            <div class="card-body d-flex align-items-center p-4 mb-0">
                                <h4 class="fw-700 mb-0 font-xssss text-grey-900">Confirm Friend</h4>
                                <a href="default-member.html" class="fw-600 ms-auto font-xssss text-primary">See all</a>
                            </div>
                            <div class="card-body bg-transparent-card d-flex p-3 bg-greylight ms-3 me-3 rounded-3">
                                <figure class="avatar me-2 mb-0"><img src="images/user-7.png" alt="image"
                                        class="shadow-sm rounded-circle w45"></figure>
                                <h4 class="fw-700 text-grey-900 font-xssss mt-2">Anthony Daugloi <span
                                        class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">12 mutual friends</span>
                                </h4>
                                <a href="#"
                                    class="btn-round-sm bg-white text-grey-900 feather-chevron-right font-xss ms-auto mt-2"></a>
                            </div>
                            <div class="card-body bg-transparent-card d-flex p-3 bg-greylight m-3 rounded-3"
                                style="margin-bottom: 0 !important;">
                                <figure class="avatar me-2 mb-0"><img src="images/user-8.png" alt="image"
                                        class="shadow-sm rounded-circle w45"></figure>
                                <h4 class="fw-700 text-grey-900 font-xssss mt-2"> David Agfree <span
                                        class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">12 mutual friends</span>
                                </h4>
                                <a href="#"
                                    class="btn-round-sm bg-white text-grey-900 feather-plus font-xss ms-auto mt-2"></a>
                            </div>
                            <div class="card-body bg-transparent-card d-flex p-3 bg-greylight m-3 rounded-3">
                                <figure class="avatar me-2 mb-0"><img src="images/user-12.png" alt="image"
                                        class="shadow-sm rounded-circle w45"></figure>
                                <h4 class="fw-700 text-grey-900 font-xssss mt-2">Hugury Daugloi <span
                                        class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">12 mutual friends</span>
                                </h4>
                                <a href="#"
                                    class="btn-round-sm bg-white text-grey-900 feather-plus font-xss ms-auto mt-2"></a>
                            </div>

                        </div>

                        <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3 mt-3">
                            <div class="card-body d-flex align-items-center p-4">
                                <h4 class="fw-700 mb-0 font-xssss text-grey-900">Suggest Group</h4>
                                <a href="default-group.html" class="fw-600 ms-auto font-xssss text-primary">See all</a>
                            </div>
                            <div class="card-body d-flex pt-4 ps-4 pe-4 pb-0 overflow-hidden border-top-xs bor-0">
                                <img src="images/e-2.jpg" alt="img" class="img-fluid rounded-xxl mb-2">
                            </div>
                            <div class="card-body dd-block pt-0 ps-4 pe-4 pb-4">
                                <ul class="memberlist mt-1 mb-2 ms-0 d-block">
                                    <li class="w20"><a href="#"><img src="images/user-6.png" alt="user"
                                                class="w35 d-inline-block" style="opacity: 1;"></a></li>
                                    <li class="w20"><a href="#"><img src="images/user-7.png" alt="user"
                                                class="w35 d-inline-block" style="opacity: 1;"></a></li>
                                    <li class="w20"><a href="#"><img src="images/user-8.png" alt="user"
                                                class="w35 d-inline-block" style="opacity: 1;"></a></li>
                                    <li class="w20"><a href="#"><img src="images/user-3.png" alt="user"
                                                class="w35 d-inline-block" style="opacity: 1;"></a></li>
                                    <li class="last-member"><a href="#"
                                            class="bg-greylight fw-600 text-grey-500 font-xssss w35 ls-3 text-center"
                                            style="height: 35px; line-height: 35px;">+2</a></li>
                                    <li class="ps-3 w-auto ms-1"><a href="#"
                                            class="fw-600 text-grey-500 font-xssss">Member apply</a></li>
                                </ul>
                            </div>



                        </div>

            <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                <div class="card-body d-flex align-items-center p-4">
                    <h4 class="fw-700 mb-0 font-xssss text-grey-900">Sản phẩm nổi bật</h4>
                    <a href="default-group.html" class="fw-600 ms-auto font-xssss text-primary">See all</a>
                </div>
                <div class="card-body d-flex pt-4 ps-4 pe-4 pb-0 overflow-hidden border-top-xs bor-0">
                    <img src="images/g-2.jpg" alt="img" class="img-fluid rounded-xxl mb-2">
                </div>
                <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                    <a href="#"
                        class="p-2 lh-28 w-100 bg-grey text-grey-800 text-center font-xssss fw-700 rounded-xl"><i
                            class="feather-external-link font-xss me-2"></i> Like Page</a>
                </div>

                {{-- <div class="card-body d-flex pt-0 ps-4 pe-4 pb-0 overflow-hidden">
                                <img src="images/g-3.jpg" alt="img" class="img-fluid rounded-xxl mb-2 bg-lightblue">
                            </div>
                            <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                                <a href="#"
                                    class="p-2 lh-28 w-100 bg-grey text-grey-800 text-center font-xssss fw-700 rounded-xl"><i
                                        class="feather-external-link font-xss me-2"></i> Like Page</a>
                            </div> --}}


            </div>


            <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                <div class="card-body d-flex align-items-center  p-4">
                    <h4 class="fw-700 mb-0 font-xssss text-grey-900">Event</h4>
                    <a href="default-event.html" class="fw-600 ms-auto font-xssss text-primary">See all</a>
                </div>
                <div class="card-body d-flex pt-0 ps-4 pe-4 pb-3 overflow-hidden">
                    <div class="bg-success me-2 p-3 rounded-xxl">
                        <h4 class="fw-700 font-lg ls-3 lh-1 text-white mb-0"><span
                                class="ls-1 d-block font-xsss text-white fw-600">FEB</span>22</h4>
                    </div>
                    <h4 class="fw-700 text-grey-900 font-xssss mt-2">Meeting with clients <span
                            class="d-block font-xsssss fw-500 mt-1 lh-4 text-grey-500">41 madison ave, floor
                            24 new work, NY 10010</span> </h4>
                </div>

                <div class="card-body d-flex pt-0 ps-4 pe-4 pb-3 overflow-hidden">
                    <div class="bg-warning me-2 p-3 rounded-xxl">
                        <h4 class="fw-700 font-lg ls-3 lh-1 text-white mb-0"><span
                                class="ls-1 d-block font-xsss text-white fw-600">APR</span>30</h4>
                    </div>
                    <h4 class="fw-700 text-grey-900 font-xssss mt-2">Developer Programe <span
                            class="d-block font-xsssss fw-500 mt-1 lh-4 text-grey-500">41 madison ave, floor
                            24 new work, NY 10010</span> </h4>
                </div>

                <div class="card-body d-flex pt-0 ps-4 pe-4 pb-3 overflow-hidden">
                    <div class="bg-primary me-2 p-3 rounded-xxl">
                        <h4 class="fw-700 font-lg ls-3 lh-1 text-white mb-0"><span
                                class="ls-1 d-block font-xsss text-white fw-600">APR</span>23</h4>
                    </div>
                    <h4 class="fw-700 text-grey-900 font-xssss mt-2">Aniversary Event <span
                            class="d-block font-xsssss fw-500 mt-1 lh-4 text-grey-500">41 madison ave, floor
                            24 new work, NY 10010</span> </h4>
                </div>

            </div>
        </div>

    </div>

@endsection
