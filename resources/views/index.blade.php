@extends('layout.main')

@section('title','home')

@section('content')
<div class="main-baner no-margin" id="home">
    <div class="swiper-container main-slider" data-autoplay="5000" data-loop="0" data-speed="500" data-center="0"
        data-slides-per-view="1">

        <div class="swiper-wrapper">
            <?php
        $slideCssClass="";
        $index=0;
        ?>
            @foreach ($servicesItems as $item)

            <?php
               if($index==0)
                {
                    $slideCssClass="bg-yellow";
                }
               elseif($index==1)
                {
                    $slideCssClass="bg-green";
                }
                elseif($index==2)
                {
                    $slideCssClass="bg-red";
                }
               elseif($index==3)
                {
                    $slideCssClass="bg-blue";
                }
                elseif($index==4)
                {
                    $slideCssClass="bg-blue";
                }
                elseif($index==5)
                {
                    $slideCssClass="bg-red";
                }
                elseif($index==6)
                {
                    $slideCssClass="bg-green";
                }
               elseif($index==7)
                {
                    $slideCssClass="bg-yellow";
                }
                else{
                    $slideCssClass="bg-yellow";
                }
                $index++;
               ?>
            <div class="swiper-slide {{$slideCssClass}}">
                <div class="container">
                    <div class="caption-slider">
                        <div class="min-title vertical-center">
                            <span>{{$item->title}}</span>
                            <h1>{{$item->title}}<br /></h1>
                            <ul class="title-list">
                                <?php
                                  $service_benfits2=DB::select('select * from service_benfits where service_item_id = ?', [$item->id])
                                 ?>
                                @foreach($service_benfits2 as $benefit)
                                <li>
                                    <p>{{$benefit->name}}</p>
                                </li>
                                @endforeach
                            </ul>
                            <a href="{{route('graphic',$item->id)}}" class="button-2 bg-white">التفاصيل</a>
                        </div>
                        <div class="main-img vertical-center">
                            <img src="{{'/image/service_items/'.$item->image}}" alt="item" />
                            <div class="baner-price">
                                <div class="vertical-center">
                                    <span>خدماتنا تبدأ من</span>
                                    <b>${{$item->price}}</b>
                                    <span>للطلب</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="swiper-arrow-left">
            <div class="arow">
                <img src="{{url('assets/images/arrow.png')}}" alt="" />
            </div>
        </div>
        <div class="swiper-arrow-right">
            <div class="arow">
                <img src="{{url('assets/images/arrow.png')}}" alt="" />
            </div>
        </div>
        <div class="pagination hidden-pag"></div>
    </div>
</div>


<div class="main-section bg-white story" id="abuot">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
                <div class="second-title">
                    {{-- <h2>{{__('aboutus.First_title')}}</h2> --}}
                    <h2>{{$aboutUs->first_title}}</h2>
                    <p align="right">
                        {{$aboutUs->first_desc}}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="image-wrapper cell-view">
                    <img src="{{'/image/about_us/'.$aboutUs->image}}" alt="" />
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="text-wrapper cell-view">
                    <h4 class="pad-20" align="right">{{$aboutUs->second_title}}</h4>
                    <p class="font-13" align="right">
                        {{$aboutUs->second_desc}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="post-blog">
                    <div class="post-text">
                        <div class="video-post">
                            <video class="video-post" style="
                      display: block;
                      margin-left: auto;
                      margin-right: auto;
                      width: 95%;
                    " controls>
                                <source src="{{'/video/about_us/'.$aboutUs->video}}" type="video/mp4" />
                                Your browser does not support HTML video.
                            </video>
                        </div>
                        <br />
                        <h5 align="center"> {{$aboutUs->third_title}} </h5>
                        <p align="center">{{$aboutUs->third_desc}} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-section service bg-grey" id="Services">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
                <div class="second-title">
                    <h2>{{$services->head_title}}</h2>
                    <p> {{$services->head_desc}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($servicesItems as $items)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="serv-block border-red">
                    <img src="{{'/image/service_items/'.$items->image}}" width="75" height="75" alt="" />
                    <h6>{{$items->title}}</h6>
                    <p class="font-13">
                        {{$items->desc}}
                    </p>
                    <a href="{{route('graphic',$items->id)}}" class="button-1">المزيد</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="main-section testimonials bg-red">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
                    <div class="second-title col-white">
                        <h2>آراء العملاء</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="swiper-container testi-slider" data-autoplay="5000" data-loop="0" data-speed="1000"
                        data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3"
                        data-lg-slides="3" data-add-slides="3" id="slider-testi">
                        <div class="swiper-wrapper">
                            @foreach($testmonials as $testmonials)
                            <div class="swiper-slide">
                                <div class="test-block">
                                    <div class="testi-text-block">
                                        <img src="/assets/images/qwote.png" alt="qwote.png" class="quott"> <br />
                                        <p class="font-13">
                                            {{$testmonials->comment}} </p>
                                    </div>
                                    <div class="testi-people">
                                        <img src="{{'/image/testmonials/'. $testmonials->image}}" alt=""
                                            class="quott" />
                                        <div class="testi-people-txt">
                                            <h5><b> {{$testmonials->name}} </b></h5>
                                            <span> {{$testmonials->job}} </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="main-section price bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
                    <div class="second-title">
                        <h2>{{$service_item->detal_title}}</h2>
                        <p>
                            {{$service_item->detal_desc}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    $packageCssClass="";
                    $index=0;
                    ?>
                @foreach($Packages as $package)
                <?php
                $packagFeatures=DB::select('select * from package_feature where package_id  = ?', [$package->id]);
                if($index==0)
                {
                    $packageCssClass="bg-yellow";
                }
               elseif($index==1)
                {
                    $packageCssClass="bg-green";
                }
                elseif($index==2)
                {
                    $packageCssClass="bg-red";
                }
               elseif($index==3)
                {
                    $packageCssClass="bg-blue";
                }
                elseif($index==4)
                {
                    $packageCssClass="bg-blue";
                }
                elseif($index==5)
                {
                    $packageCssClass="bg-red";
                }
                elseif($index==6)
                {
                    $packageCssClass="bg-green";
                }
               elseif($index==7)
                {
                    $packageCssClass="bg-yellow";
                }
                else{
                    $packageCssClass="bg-yellow";
                }
                $index++;
               ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="price-block b-shadow b-radius">
                        <div class="price-header {{$packageCssClass}}">
                            <h5>{{$package->name}}</h5>
                        </div>
                        <ul>
                            @foreach($packagFeatures as $feature)
                            <li>
                                <span class="fa fa-check"></span>{{$feature->name}}
                            </li>
                            @endforeach
                        </ul>

                        <div class="price-num">
                            <span>{{$package->price}}<small>EGP</small></span>
                            <a href="{{route('index')}}#contact" class="button-2 {{$packageCssClass}}">إختر
                                الباقة</a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>

    <div class="main-section feature" id="work" style="background-color: #f4f5f6">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
                    <div class="second-title">
                        <h2> {{$old_project->title}}</h2>
                        <p>{{$old_project->desc}} </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="features-monitor">
                        <div class="monitor-mask">
                            <img src="{{'/image/Latest_Projects/'.$old_project->image}}" alt="monitor" height="auto" />
                        </div>
                        <div class="monitor-img">
                            <div class="clip">
                                <div class="bg bg-bg-chrome act" style="background-image: url(/image/f_image_1.jpg)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach($project_item->chunk(2) as $project_item)
                <div class="col-md-3">
                    @foreach($project_item as $project_item)
                    <div class="feature-block b-radius f-h-1">
                        <img src="{{'/image/project_items/'.$project_item->image}}" alt="project logo" />
                        <h6>{{$project_item->title}}</h6>
                        <p class=" font-13">{{$project_item->desc}}</p>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- <div class="main-section bg-cyan" style="padding: 80px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="swiper-container logo-slider" data-autoplay="5000" data-loop="0" data-speed="1000"
                        data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="3"
                        data-md-slides="6" data-lg-slides="6" data-add-slides="6">
                        <div class="swiper-wrapper" style="margin-left:30px">
                            @foreach($pic_carousel as $pic_carousel)
                            <div class="swiper-slide">
                                <div class="logo-block">
                                    <img src="{{'/image/pic_carousel/'.$pic_carousel->image}}" alt="77" width="190"
    height="84" />
    <div class="logo-hide">
        <img src="{{'/image/pic_carousel/'.$pic_carousel->image}}" alt="77" width="190" height="84" />
    </div>
</div>
</div>
@endforeach
</div </div> <div class="pagination">
</div>
</div>
</div>
</div>
</div>
</div>

<div class="main-section bg-white" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
                <div class="second-title">
                    <h2>تواصل معنا</h2>
                    <p>نسعد بتلقي إقتراحاتكم وطلباتكم على بريدنا</p>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
                <form method="GET" action="{{route('ContactUsSubmit2')}}" enctype="multipart/form-data"
                    class="contact-form bg-grey b-radius b-shadow">
                    @csrf
                    <div class="form-img">
                        <img name="image" src="/image/form.png" alt="" />
                    </div>
                    <div class="input-label">
                        <label for="name">Your name *</label>
                        <input type="text" name="name" value="" id="name" />
                    </div>
                    <div class="input-label">
                        <label for="email">Your email *</label>
                        <input type="email" name="email" value="" id="email" />
                    </div>
                    <div class="input-label">
                        <label for="phone">Your phone *</label>
                        <input type="text" name="phone" value="" id="phone" />
                    </div>
                    <div class="input-label">
                        <label for="message">Message</label>
                        <textarea name="message" id="message"></textarea>
                    </div>
                    <button type="submit" id="Send" class="submit b-shadow">
                        submit
                    </button>
                    <p style="text-align: center; padding: 25px; font-size: 18px" id="result"></p>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="maps">
    <style type="text/css">
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }

    </style>
    <script>
        // Initialize and add the map
                    function initMap() {
                      // The location of Uluru
                      const uluru = { lat: <?= $company_data->latitude ?> , lng:<?= $company_data->longitude ?> };
                      // The map, centered at Uluru
                      const map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 4,
                        center: uluru,
                      });
                      // The marker, positioned at Uluru
                      const marker = new google.maps.Marker({
                        position: uluru,
                        map: map,
                      });
                    }
    </script>
    </head>

    <!--The div element for the map -->
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmJQEmZ-tlvb4NKjVzew9XJbrtg8eG7lE&callback=initMap&libraries=&v=weekly"
        async></script>

</div>
<br><br> --}}
