<!-- Quote Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="contact">
    <div class="container py-5">
        <div class="row g-5 justify-content-center">
            <div class="col-lg-5">
                <h5 class="fw-bold text-primary text-uppercase">{{$Contact->name}}</h5>
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                    <form action="/" method="POST">
                        @csrf
                        @if (Session::has('Success'))
                            <div class="row">
                                <div class="alert alert-success">{{Session::get('Success')}}</div>
                            </div>
                        @endif
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="{{__('content.form_name')}}" style="height: 55px;" name="name" required>
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control bg-light border-0" placeholder="{{__('content.form_email')}}" style="height: 55px;" name="email" required>
                            </div>
                            <div class="col-12">
                                <select class="form-select bg-light border-0" style="height: 55px;" name="microservice_id" required>
                                    <option selected>{{__('content.form_service')}}</option>
                                    @foreach ($Microservices as $Microservice)
                                        <option value="{{$Microservice->id}}">{{$Microservice->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0" rows="3" placeholder="{{__('content.form_message')}}" required name="message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">{{__('content.form_submit')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->
