<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="about">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">{{$About->name}}</h5>
                    <h1 class="mb-0">{{$About->title}}</h1>
                </div>
                <p class="mb-4">{{$About->description}}</p>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{$About->image}}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
