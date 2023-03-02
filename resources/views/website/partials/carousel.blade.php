<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0" id="home">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0">{{__('content.logo')}}</h1>
            {{-- <i class="fa fa-user-tie me-2"></i> --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/#home" class="nav-item nav-link active">{{__('content.home')}}</a>
                <a href="/#about" class="nav-item nav-link">{{__('content.about')}}</a>
                <a href="/#services" class="nav-item nav-link">{{__('content.services')}}</a>
                <a href="/#contact" class="nav-item nav-link">{{__('content.contact')}}</a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        {{Backpack\LangFileManager\app\Models\Language::where('abbr',Session::get('locale'))->first()->native}}
                    </a>
                    <div class="dropdown-menu m-0">
                        @foreach (Backpack\LangFileManager\app\Models\Language::where('active',1)->get() as $Language)
                            <li><a class="@if(Session::get('locale')==$Language->abbr)active @endif dropdown-item" href="{{url('set-language/'.$Language->abbr)}}">{{$Language->native}}</a></li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            @php
                $count=0;
            @endphp
            @foreach ($Slides as $Slide)
                @php
                    $count++;
                @endphp
                @if ($count==1)
                    <div class="carousel-item active">
                        <img class="w-100" src="{{$Slide->image}}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{$Slide->small_text}}</h5>
                                <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{$Slide->big_text}}</h1>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="carousel-item">
                        <img class="w-100" src="{{$Slide->image}}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{$Slide->small_text}}</h5>
                                <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{$Slide->big_text}}</h1>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">{{__('backpack::crud.paginate.previous')}}</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">{{__('backpack::crud.paginate.next')}}</span>
        </button>
    </div>
</div>
<!-- Navbar & Carousel End -->
