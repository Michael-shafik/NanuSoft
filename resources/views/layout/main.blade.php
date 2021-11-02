<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="shortcut icon" type="image/jpg" href="{{url('assets/images/logo.jpg')}}" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
    <link href="{{url('assets/css/main.css')}}" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>@yield('title','NANUSOFT')</title>
</head>

<body>
    <!-- include header and can to change or add new item in other page-->
    @section('navbar')
    @include('layout.navbar')
    @show

    <!--content page -->
    @yield('content')
    <div class="main-section bg-cyan" style="padding: 80px">
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
                                        <img src="{{'/image/pic_carousel/'.$pic_carousel->image}}" alt="77"
                                            width="190" height="84" />
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
<br><br>
    @section('footer')
    @include('layout.footer')
    @show

</body>
</html>
