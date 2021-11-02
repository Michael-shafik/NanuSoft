<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ContactController;
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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
Route::get('/', function () {
    return view('home');
});


/////////////////////////////////////////// Home page/////////////////////////////////////////

Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/Home', 'namespace' => 'Home',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('Home', 'HomeController@index')->name('index');
    }
);






/////////////////////////////////////////// Service Details/////////////////////////////////////////

Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/ServiceDetails', 'namespace' => 'ServiceDetails',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('graphic/{id}', 'ServiceDetailsController@graphic')->name('graphic');
        // Route::get('index', 'ServiceDetailsController@index')->name('index');
    }
);
///////////////////////////route about page////////////////////////////////////////////

Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/About', 'namespace' => 'About',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('About_US', 'AboutController@index')->name('About_US');
        Route::post('store', 'AboutController@store')->name('aboutUsSubmit');
        Route::get('about_Us/edit/{id}', 'AboutControllerr@edit')->name('editAbout_Us');
        Route::put('update', 'AboutController@update')->name('updateAbout_Us');
        Route::delete('destroy/{id}', 'AboutController@destroy')->name('deleteAbout_Us');
    }
);



///////////////////////////route contact us page////////////////////////////////////////////
Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/Contact', 'namespace' => 'Contact',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('Contact_US', 'ContactController@index')->name('Contact_US');
        Route::post('store', 'ContactController@store')->name('ContactUsSubmit');
        Route::get('Contact_Us/edit/{id}', 'ContactController@edit')->name('EditContact_Us');
        Route::put('update', 'ContactController@update')->name('UpdateContact_Us');
        Route::delete('destroy/{id}', 'ContactController@destroy')->name('deleteContactUS');
        Route::MATCH(['GET', 'POST'], 'store', 'ContactController@store2')->name('ContactUsSubmit2');
    }
);
///////////////////////////route company data page////////////////////////////////////////////
Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/Company', 'namespace' => 'Company',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('Company_info', 'CompanyController@index')->name('Company_info');
        Route::post('store', 'CompanyController@store')->name('Company_infoSubmit');
        Route::get('Company_info/edit/{id}', 'CompanyController@edit')->name('EditCompany_info');
        Route::put('update', 'CompanyController@update')->name('UpdateCompany_info');
        Route::delete('destroy/{id}', 'CompanyController@destroy')->name('deleteCompany_info');
    }
);


///////////////////////////route Testmonials  page////////////////////////////////////////////
Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/Testmonials', 'namespace' => 'Testmonials',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('Testmonials', 'TestmonialsController@index')->name('Testmonials');
        Route::post('store', 'TestmonialsController@store')->name('TestmonialsSubmit');
        Route::get('Testmonials/edit/{id}', 'TestmonialsController@edit')->name('EditTestmonials');
        Route::put('update', 'TestmonialsController@update')->name('UpdateTestmonials');
        Route::delete('destroy/{id}', 'TestmonialsController@destroy')->name('deleteTestmonials');
    }
);
///////////////////////////route latest Projects  page////////////////////////////////////////////
Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/Latest_Projects', 'namespace' => 'Latest_Projects',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('Latest_Projects', 'Latest_ProjectsController@index')->name('Latest_Projects');
        Route::post('store', 'Latest_ProjectsController@store')->name('Latest_ProjectsSubmit');
        Route::get('Latest_Projects/edit/{id}', 'Latest_ProjectsController@edit')->name('EditLatest_Projects');
        Route::put('update', 'Latest_ProjectsController@update')->name('UpdateLatest_Projects');
        Route::delete('destroy/{id}', 'Latest_ProjectsController@destroy')->name('deleteLatest_Projects');
    }
);
///////////////////////////route Project items  page////////////////////////////////////////////
Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/Project_items', 'namespace' => 'Project_items',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('Project_items', 'Project_itemsController@index')->name('Project_items');
        Route::post('store', 'Project_itemsController@store')->name('Project_ItemsSubmit');
        Route::get('Project_items/edit/{id}', 'Project_itemsController@edit')->name('EditProject_items');
        Route::put('update', 'Project_itemsController@update')->name('UpdateProject_items');
        Route::delete('destroy/{id}', 'Project_itemsController@destroy')->name('deleteProject_items');
    }
);
///////////////////////////route News Letter  page////////////////////////////////////////////
Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/News_letter', 'namespace' => 'News_letter',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('News_letter', 'News_letterController@index')->name('News_letter');
        Route::post('store', 'News_letterController@store')->name('News_letterSubmit');
        Route::get('News_letter/edit/{id}', 'News_letterController@edit')->name('EditNews_letter');
        Route::put('update', 'News_letterController@update')->name('UpdateNews_letter');
        Route::delete('destroy/{id}', 'News_letterController@destroy')->name('deleteNews_letter');
        Route::match(['GET', 'POST'], 'store', 'News_letterController@store2')->name('News_letterSubmit2');
    }
);
///////////////////////////route Services  page////////////////////////////////////////////
Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/Services', 'namespace' => 'Services',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('Services', 'ServicesController@index')->name('Services');
        Route::post('store', 'ServicesController@store')->name('ServicesSubmit');
        Route::get('Services/edit/{id}', 'ServicesController@edit')->name('EditServices');
        Route::put('update', 'ServicesController@update')->name('UpdateServices');
        Route::delete('destroy/{id}', 'ServicesController@destroy')->name('deleteServices');
    }
);
///////////////////////////route Services  Items////////////////////////////////////////////
Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/Services_Items', 'namespace' => 'Services_Items',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('Services_Items', 'Services_ItemsSubmitController@index')->name('Services_Items');
        Route::post('store', 'Services_ItemsSubmitController@store')->name('Services_ItemsSubmit');
        Route::get('Services_Items/edit/{id}', 'Services_ItemsSubmitController@edit')->name('EditServices_Items');
        Route::put('update', 'Services_ItemsSubmitController@update')->name('UpdateServices_Items');
        Route::delete('destroy/{id}', 'Services_ItemsSubmitController@destroy')->name('deleteServices_Items');
    }
);
///////////////////////////route Services  Items////////////////////////////////////////////
Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/Services_benfits', 'namespace' => 'Services_benfits',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('Services_benfits', 'Services_benfitsController@index')->name('Services_benfits');
        Route::post('store', 'Services_benfitsController@store')->name('Services_benfitsSubmit');
        Route::get('Services_benfits/edit/{id}', 'Services_benfitsController@edit')->name('EditServices_Items');
        Route::put('update', 'Services_benfitsController@update')->name('UpdateServices_benfits');
        Route::delete('destroy/{id}', 'Services_benfitsController@destroy')->name('deleteServices_benfits');
    }
);
///////////////////////////route packages////////////////////////////////////////////
Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/Packages', 'namespace' => 'Packages',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('Packages', 'PackagesController@index')->name('Packages');
        Route::post('store', 'PackagesController@store')->name('CreatePackagesSubmit');
        Route::get('Packages/edit/{id}', 'PackagesController@edit')->name('EditPackages');
        Route::put('update', 'PackagesController@update')->name('UpdatePackages');
        Route::delete('destroy/{id}', 'PackagesController@destroy')->name('deletePackages');
    }
);

///////////////////////////route Packages Feature////////////////////////////////////////////
Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/Packages_Feature', 'namespace' => 'Packages_Feature',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('Packages_Feature', 'Packages_FeatureController@index')->name('Packages_Feature');
        Route::post('store', 'Packages_FeatureController@store')->name('CreatePackages_FeatureSubmit');
        Route::get('Packages_Feature/edit/{id}', 'Packages_FeatureController@edit')->name('EditPackages_Feature');
        Route::put('update', 'Packages_FeatureController@update')->name('UpdatePackages_Feature');
        Route::delete('destroy/{id}', 'Packages_FeatureController@destroy')->name('deletePackages_Feature');
    }
);
///////////////////////////route Products///////////////////////////////////////////
Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/Products', 'namespace' => 'Products',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('Products', 'ProductsController@index')->name('Products');
        Route::post('store', 'ProductsController@store')->name('CreateProductsSubmit');
        Route::get('Products/edit/{id}', 'ProductsController@edit')->name('EditProducts');
        Route::put('update', 'ProductsController@update')->name('UpdateProducts');
        Route::delete('destroy/{id}', 'ProductsController@destroy')->name('deleteProducts');
    }
);
///////////////////////////route Products_Items///////////////////////////////////////////
Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/Products_Items', 'namespace' => 'Products_Items',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('Products_Items', 'Products_ItemsController@index')->name('Products_Items');
        Route::post('store', 'Products_ItemsController@store')->name('Products_ItemsSubmit');
        Route::get('Products_Items/edit/{id}', 'Products_ItemsController@edit')->name('EditProducts_Items');
        Route::put('update', 'Products_ItemsController@update')->name('UpdateProducts_Items');
        Route::delete('destroy/{id}', 'Products_ItemsController@destroy')->name('deleteProducts_Items');
    }
);
///////////////////////////route Catageores///////////////////////////////////////////
Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/Catageores', 'namespace' => 'Catageores',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('Catageores', 'CategoriesController@index')->name('Catageores');
        Route::post('store', 'CategoriesController@store')->name('CatageoresSubmit');
        Route::get('Catageores/edit/{id}', 'CategoriesController@edit')->name('EditCatageores');
        Route::put('update', 'CategoriesController@update')->name('UpdateCatageores');
        Route::delete('destroy/{id}', 'CategoriesController@destroy')->name('deleteCatageores');
    }
);

///////////////////////////route Owl CAROUSEL page////////////////////////////////////////////

Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/OwlCarousel', 'namespace' => 'OwlCarousel',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('OwlCarousel', 'OwlCarouselController@index')->name('OwlCarousel');
        Route::post('store', 'OwlCarouselController@store')->name('OwlCarouselSubmit');
        Route::get('OwlCarousel/edit/{id}', 'OwlCarouselController@edit')->name('editOwlCarousel');
        Route::put('update', 'OwlCarouselController@update')->name('updateOwlCarousel');
        Route::delete('destroy/{id}', 'OwlCarouselController@destroy')->name('deleteOwlCarousel');
    }


);

///////////////////////////routeModel Works page////////////////////////////////////////////

Route::group(
    [

        'prefix' => LaravelLocalization::setLocale() . '/Models_Works', 'namespace' => 'Models_Works',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('Models_Works', 'Models_WorksController@index')->name('Models_Works');
        Route::post('store', 'Models_WorksController@store')->name('Models_WorkslSubmit');
        Route::get('Models_Works/edit/{id}', 'Models_WorksController@edit')->name('editModels_Works');
        Route::put('update', 'Models_WorksController@update')->name('updateModels_Works');
        Route::delete('destroy/{id}', 'Models_WorksController@destroy')->name('deleteModels_Works');
    }


);
