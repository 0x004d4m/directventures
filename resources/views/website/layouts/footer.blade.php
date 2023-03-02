<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s" id="footer">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                    <a href="" class="navbar-brand">
                        <h1 class="m-0 text-white">{{__('content.footer_logo')}}</h1>
                    </a>
                    <p class="mt-3 mb-4">{{__('content.footer_text')}}</p>
                    <form action="/mailing_list" method="post">
                        @csrf
                        @if (Session::has('Success2'))
                            <div class="row">
                                <div class="alert alert-success">{{Session::get('Success2')}}</div>
                            </div>
                        @endif
                        <div class="input-group">
                            <input type="email" class="form-control border-white p-3" placeholder="{{__('content.footer_placeholder')}}" required name="email">
                            <button class="btn btn-dark">{{__('content.footer_button')}}</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5"></div>
                    <div class="col-lg-4 col-md-12 pt-5 mb-5"></div>
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">{{__('content.footer_get_in_touch')}}</h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">{{__('content.footer_location')}}</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">{{__('content.footer_email')}}</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square me-2" href="{{__('content.footer_youtube')}}"><i class="fab fa-youtube fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="{{__('content.footer_linkedin')}}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square" href="{{__('content.footer_instagram')}}"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    {{__('content.footer_copywrite')}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
