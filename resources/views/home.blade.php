@extends('layout.master')

@section('title','Dashboard')

@section('content')
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ breadcrumb ] start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                            <h5>Home</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php"><i
                                                        class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Analytics Dashboard</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->
                        <!-- [ Main Content ] start -->
                        <div class="row">

                            <div class="col-md-12">
                                <div class="row">
                                    <!--Start Col-->
                                    <div class="col-md-3">
                                        <div class="card bg-c-purple order-card">
                                            <div class="card-body">
                                                <h6 class="m-b-20">
                                                    <li class="pcoded"><a href="{{url('About/About_US')}}"
                                                            class="">About Us
                                                        </a>
                                                    </li>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Col-->
                                    <!--Start Col-->
                                    <div class="col-md-3">
                                        <div class="card bg-c-blue order-card">
                                            <div class="card-body">
                                                <h6 class="m-b-20">
                                                    <li class="pcoded"><a href="{{url('Contact/Contact_US')}}"
                                                            class="">Contact Us
                                                        </a>
                                                    </li>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Col-->
                                    <!--Start Col-->
                                    <div class="col-md-3">
                                        <div class="card bg-c-green order-card">
                                            <div class="card-body">
                                                <h6 class="m-b-20">
                                                    <li class="pcoded"><a href="{{url('Testmonials/Testmonials')}}"
                                                            class="">Testmonials</a>
                                                    </li>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Col-->
                                    <!--Start Col-->
                                    <div class="col-md-3">
                                        <div class="card bg-c-blue order-card">
                                            <div class="card-body">
                                                <h6 class="m-b-20">
                                                    <li class="pcoded"><a href="{{url('Company/Company_info')}}"
                                                            class=""> Company data</a>
                                                    </li>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Col-->
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <!--Start Col-->
                                            <div class="col-md-3">
                                                <div class="card bg-c-red order-card">
                                                    <div class="card-body">
                                                        <h6 class="m-b-20">
                                                            <li class="pcoded"><a
                                                                    href="{{url('News_letter/News_letter')}}"
                                                                    class="">News letter</a>
                                                            </li>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Col-->
                                            <!--Start Col-->
                                            <div class="col-md-3">
                                                <div class="card bg-c-blue order-card">
                                                    <div class="card-body">
                                                        <h6 class="m-b-20">
                                                            <li class="pcoded"><a
                                                                    href="{{url('Services_Items/Services_Items')}}"
                                                                    class="">Services
                                                                    items</a> </li>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Col-->
                                            <!--Start Col-->
                                            <div class="col-md-3">
                                                <div class="card bg-c-green order-card">
                                                    <div class="card-body">
                                                        <h6 class="m-b-20">
                                                            <li class="pcoded"><a
                                                                    href="{{url('Services_benfits/Services_benfits')}}"
                                                                    class="">Services
                                                                    penfits</a> </li>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Col-->
                                            <!--Start Col-->
                                            <div class="col-md-3">
                                                <div class="card bg-c-blue order-card">
                                                    <div class="card-body">
                                                        <h6 class="m-b-20">
                                                            <li class="pcoded"><a href="{{url('Packages/Packages')}}"
                                                                    class="">packages </a> </li>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Col-->
                                            <!--Start Col-->
                                            <div class="col-md-3">
                                                <div class="card bg-c-purple order-card">
                                                    <div class="card-body">
                                                        <h6 class="m-b-20">
                                                            <li class="pcoded"><a
                                                                    href="{{url('Packages_Feature/Packages_Feature')}}"
                                                                    class="">packages
                                                                    Featcher</a> </li>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Col-->
                                            <!--Start Col-->
                                            <div class="col-md-3">
                                                <div class="card bg-c-red order-card">
                                                    <div class="card-body">
                                                        <h6 class="m-b-20"><li class="pcoded"><a href="{{url('Catageores/Catageores')}}" class="">Catageores </a> </li>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Col-->
                                            <!--Start Col-->
                                            <div class="col-md-3">
                                                <div class="card bg-c-green order-card">
                                                    <div class="card-body">
                                                        <h6 class="m-b-20"><li class="pcoded"><a href="{{url('Products/Products')}}" class="">Products </a> </li>

                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Col-->
                                            <!--Start Col-->
                                            <div class="col-md-3">
                                                <div class="card bg-c-blue order-card">
                                                    <div class="card-body">
                                                        <h6 class="m-b-20"><li class="pcoded"><a href="{{url('Products_Items/Products_Items')}}" class="">Products
                                                            Items</a> </li>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Col-->
                                            <!--Start Col-->
                                            <div class="col-md-3">
                                                <div class="card bg-c-purple order-card">
                                                    <div class="card-body">
                                                        <h6 class="m-b-20"><li class="pcoded"><a href="{{url('OwlCarousel/OwlCarousel')}}" class="">Owl Carousel </a>
                                                        </li>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Col-->
                                            <!--Start Col-->
                                            <div class="col-md-3">
                                                <div class="card bg-c-red order-card">
                                                    <div class="card-body">
                                                        <h6 class="m-b-20"><li class="pcoded"><a href="{{url('Models_Works/Models_Works')}}" class=""> Models_Works
                                                        </a>
                                                    </li>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Col-->
                                            <!--Start Col-->
                                            <div class="col-md-3">
                                                <div class="card bg-c-blue order-card">
                                                    <div class="card-body">
                                                        <h6 class="m-b-20"><li class="pcoded"><a href="{{url('Latest_Projects/Latest_Projects')}}" class="">latest
                                                            projects</a> </li>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Col-->
                                            <!--Start Col-->
                                            <div class="col-md-3">
                                                <div class="card bg-c-green order-card">
                                                    <div class="card-body">
                                                        <h6 class="m-b-20">  <li class="pcoded"><a href="{{url('Project_items/Project_items')}}" class=""> project
                                                            items</a> </li>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Col-->
                                            <!--Start Col-->
                                            <div class="col-md-3">
                                                <div class="card bg-c-purple order-card">
                                                    <div class="card-body">
                                                        <h6 class="m-b-20"> <li class="pcoded"><a href="{{url('News_letter/News_letter')}}" class="">News letter</a>
                                                        </li>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Col-->

                                        </div>
                                    </div>
                                </div>

                                <!-- [ Main Content ] end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
