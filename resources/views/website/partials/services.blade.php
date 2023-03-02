<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="services">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">{{$Service->name}}</h5>
            <h1 class="mb-0">{{$Service->title}}</h1>
        </div>
        <div class="row g-5 justify-content-center">
            @foreach ($Microservices as $Microservice)
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="{{$Microservice->icon}} text-white"></i>
                        </div>
                        <h4 class="mb-3">{{$Microservice->title}}</h4>
                        <p class="m-0">{{$Microservice->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->
