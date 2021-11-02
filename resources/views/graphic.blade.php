@extends('layout.main')

@section('title','graphic')
@section('content')
<div class="main-section service bg-grey" id="Services">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
                <div class="second-title">
                    <h2>{{$service_item->detal_title}}</h2>
                    <p> {{$service_item->detal_desc}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
<div class="row ">
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
    <div class="col-md-4 col-sm-6 col-xs-12">
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
                <a href="#contact" class="button-2 {{$packageCssClass}}">إختر الباقة</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
<br><br>

<!--Gallery Section-->

<section class="gallery-section">
    <div class="container">
        @foreach($models_work as $models_work)
        <?php
         $models_work=DB::select('select * from models_work where service_item_id  = ?', [$service_item->id]);
         ?>      
          @endforeach
            <div class="row items-container clearfix">
                  @foreach($models_work as $models_work)
                        <div class="col-md-4 col-sm-6 col-xs-12 masonry-item all graph">
                          <div class="image-box ">
                        <figure>
                            <img src="{{'/image/models_work/'.$models_work->image}}" alt="monitor" height="auto" />
                        </figure>
                        <div class="images-overly">
                            <a href="{{'/image/models_work/'.$models_work->image}}"
                                class="lightbox-image overlay-box"><i class="fa fa-image" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 masonry-item all motion">
                    <div class="video-post">
                         <video class="video-post" style="
                       display: block;
                      margin-left: auto;
                      margin-right: auto;
                      width: 95%;
                      padding: 10px;
                    " controls>
                            <source src="{{'/video/models_work/'.$models_work->video}}" type="video/mp4" />
                            Your browser does not support HTML video.
                     </video>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<br><br>
<!--End gallery Section-->
@endsection
