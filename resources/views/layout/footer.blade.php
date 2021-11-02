<footer class="bg-dark">
    <div class="top-footer-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="top-f-block">
                        <img src="/img/support.png" alt="" />
                        <a href="tel:{{$company_data->phone}}">24/7 Custtomer Support</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="top-f-block text-center">
                        <img src="/img/mail.png" alt="" />
                        <a href="mailto:{{$company_data->email}}">{{$company_data->email}}</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="top-f-block text-right">
                        <img src="/img/phone.png" alt="" />
                        <a href="tel:{{$company_data->phone}}">{{$company_data->phone}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="footer-title">
                    <div class="footer-folow">
                        <a href="https://www.instagram.com/nanusoft.adv" class="fa fa-instagram bg-blue-2"></a>
                        <a href="https://twitter.com/NanuSoftAdv" class="fa fa-twitter bg-twitter"></a>
                        <a href="https://www.facebook.com/nanusoft" class="fa fa-facebook bg-facebook"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footer-block">
                    <h6 align="left">company info</h6>
                    <ul align="left">
                        <li><a href="{{route('index')}}#about">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Acceptable Use Policy</a></li>
                        <li><a href="#">Affiliates</a></li>
                    </ul>
                </div>
            </div>



            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footer-block" align="right">
                    <h6 align="right">سجل إهتمامك</h6>
                    <form id="subscripeform" action="{{route('News_letterSubmit2')}}" method="GET"
                        align="right">
                        @csrf
                        <span class="input input--yoshiko" align="right">
                            <input class="input__field input__field--yoshiko" type="tel" id="phone" name="phone"
                                value="" required />
                            <label class="input__label input__label--yoshiko" for="input-10">
                                <span class="input__label-content input__label-content--yoshiko"
                                    data-content="Enter your phone" align="right">سجل رقم جوالك هنا</span>
                            </label>
                        </span>
                        <button type="submit" id="subscripe" class="b-shadow">
                            أرسل
                        </button>
                        <p style="color: #fff; font-size: 14px" id="result2"></p>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footer-block" align="right">
                    <h6 align="right">العنوان</h6>
                    <h6 align="right">{{$company_data->address}}</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright bg-dark-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="{{route('index')}}#contact">إتصل بنا</a></li>
                        <li><a href="{{route('index')}}#work">أعمالنا</a></li>
                        <li><a href="{{route('index')}}#Services">خدماتنا</a></li>
                        <li><a href="{{route('index')}}#abuot">من نحن</a></li>
                        <li><a href="{{route('index')}}#home">الرئيسية</a></li>
                    </ul>

                    <span>© 2016 All rights @
                        <span class="tt"> www.nanusoft.com</span></span>
                </div>
            </div>
        </div>

        <center>
            <a href="https://www.easycounter.com/">
                <img src="https://www.easycounter.com/counter.php?syswet" border="0"
                    alt="Website Hit Counters" /></a>
        </center>
    </div>

<script src="{{url('assets/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/js/idangerous.swiper.min.js')}}"></script>
<script src="{{url('assets/js/jquery.countTo.js')}}"></script>
<script src="{{url('assets/js/jquery.zaccordion.min.js')}}"></script>

<script src="js/canvasjs.min.js"></script>
<script src="js/chart.js"></script>
<script src="{{url('assets/js/jquery.circliful.min.js')}}"></script>
<script src="{{url('assets/js/all.js')}}"></script>
</footer>
