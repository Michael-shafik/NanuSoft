<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\App;
use App\about_us;
use App\service_item;
use App\contact_us;
use App\testmonials;
use App\old_project;
use App\project_item;
use App\company_data;
use App\Services;
use App\service_benfits;
use App\packages;
use App\package_feature;
use App\pic_carousel;
use App\services_packages;
use App\models_work;


class HomeController extends Controller
{
    public function index()
    {
        $aboutUs = about_us::first();
        $servicesItems = service_item::all();
        $contact_us = contact_us::all();
        $testmonials = testmonials::all();
        $old_project =   old_project::first();
        $project_item =   project_item::all();
        $company_data =   company_data::first();
        $services =   services::first();
        $service_benfits =   service_benfits::all();
        $service_item = service_item::first();
        $Packages  =   packages::all()->take(4);
        $packagFeature =   package_feature::all();
        $pic_carousel = pic_carousel::all();
        $packages  =   packages::first();

        return view('index')
            ->with(compact("aboutUs"))
            ->with(compact("servicesItems"))
            ->with(compact("contact_us"))
            ->with(compact("old_project"))
            ->with(compact("project_item"))
            ->with(compact("company_data"))
            ->with(compact("services"))
            ->with(compact("service_benfits"))
            ->with(compact("service_item"))
            ->with(compact("packages"))
            ->with(compact("Packages"))

            ->with(compact("packagFeature"))
            ->with(compact("pic_carousel"))

            ->with(compact("testmonials"));
    }
    public function graphic($id)
    {
        $testmonials = testmonials::all();
        $services_packages = services_packages::all();
        $pic_carousel = pic_carousel::all();
        $servicesItems = service_item::all();
        $aboutUs = about_us::first();
        $services =   services::first();
        $company_data =   company_data::first();
        $service_item = service_item::find($id);
        $test = services_packages::where('service_item_id', $id)->first();
        $Packages = $service_item->packages;
        $models_work = $service_item->models_work;

        $packages =   Packages::first();
        $models_work = models_work::all();
        return view('graphic')
            ->with(compact("service_item"))
            ->with(compact("company_data"))
            ->with(compact("services"))
            ->with(compact("servicesItems"))
            ->with(compact("aboutUs"))
            ->with(compact("pic_carousel"))
            ->with(compact("Packages"))
            ->with(compact("packages"))
            ->with(compact("models_work"))
            ->with(compact("testmonials"))

            ->with(compact("services_packages"));
    }
}
