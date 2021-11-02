
<div class="preloader">
    <div class="container-fluid">
        <div class="spinner">
            <span class="ball-1"></span>
            <span class="ball-2"></span>
            <span class="ball-3"></span>
            <span class="ball-4"></span>
        </div>
    </div>
</div>
<header>
    <div class="container">
        <div class="logo">
            <a href="">
                <img src="{{'/image/Company/'.$company_data->logo}}" alt="logo" />
            </a>
        </div>
        <div class="nav-menu-icon">
            <a href="#"><i></i></a>
        </div>
        <nav style="padding-top: 10px">
            <ul class="nav2">
                <li id="li5"><a href="{{route('index')}}#contact">إتصل بنا</a></li>
                <li id="li4"><a href="{{route('index')}}#work">أعمالنا</a></li>
                <li id="li3">
                    <a href="{{route('index')}}#Services">{{$services->head_title}}<span class="fa fa-times open-drop"></span></a>
                    <ul class="dropmenu">
                        @foreach ($servicesItems as $service_item)
                        <li>
                            <a href="{{route('graphic',$service_item->id)}}" align="center">{{$service_item->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>

                <li id="li2"><a href="{{route('index')}}#abuot">{{$aboutUs->second_title}}</a></li>
                <li id="li1" class="active"><a href="{{route('index')}}#home">الرئيسية</a></li>
                {{-- <li >
                    <div class="">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}"
                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
                </a>
                </li>
                @endforeach
                      </div>
              </li> --}}
            </ul>
          </nav>
    </div>
</header>
