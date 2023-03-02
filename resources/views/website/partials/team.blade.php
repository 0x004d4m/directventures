<!-- Team Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">{{$Team->name}}</h5>
            <h1 class="mb-0">{{$Team->title}}</h1>
        </div>
        <div class="row g-5">
            @foreach ($Members as $Member)
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{$Member->image}}" alt="">
                            <div class="team-social">
                                @if ($Member->twitter != "")
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{$Member->twitter}}" target="_blank"><i class="fab fa-twitter fw-normal"></i></a>
                                @endif
                                @if ($Member->facebook != "")
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{$Member->facebook}}" target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                                @endif
                                @if ($Member->instagram != "")
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{$Member->instagram}}" target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                                @endif
                                @if ($Member->linkedin != "")
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{$Member->linkedin}}" target="_blank"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                @endif
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">{{$Member->name}}</h4>
                            <p class="text-uppercase m-0">{{$Member->position}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->
