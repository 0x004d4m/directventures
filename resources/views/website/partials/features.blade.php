<!-- Features Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">{{$Why->title}}</h5>
            <h1 class="mb-0">{{$Why->name}}</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="{{$Why->why1_icon}} text-white"></i>
                        </div>
                        <h4>{{$Why->why1_title}}</h4>
                        <p class="mb-0">{{$Why->why1_description}}</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="{{$Why->why2_icon}} text-white"></i>
                        </div>
                        <h4>{{$Why->why2_title}}</h4>
                        <p class="mb-0">{{$Why->why2_description}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{$Why->image}}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="{{$Why->why3_icon}} text-white"></i>
                        </div>
                        <h4>{{$Why->why3_title}}</h4>
                        <p class="mb-0">{{$Why->why3_description}}</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="{{$Why->why4_icon}} text-white"></i>
                        </div>
                        <h4>{{$Why->why4_title}}</h4>
                        <p class="mb-0">{{$Why->why4_description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->
