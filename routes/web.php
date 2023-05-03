<?php

use App\Helpers\LogActivity;
use App\Http\Controllers\_productController;
use App\Http\Controllers\accessController;
use App\Http\Controllers\applicantController;
use App\Http\Controllers\paperController;
use App\Http\Controllers\productController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\_serviceController;
use App\Http\Controllers\uploadImageController;
use App\Models\job;
use App\Models\news;
use App\Models\User;
use App\Models\category;
use App\Models\technical_paper;
use App\Models\product;
use App\Models\service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\NewsController;
use Jorenvh\Share\Share;

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

Auth::routes();

Route::get('/job_show/{id}',[JobController::class,'show'])->middleware('validateJobStatus')->name('showJob');

Route::get('/news_details/{id}',function ($id){
    $newsVar = news::findorFail($id);
    $url = url()->full();
    $share = (new Jorenvh\Share\Share)->page('http://192.168.0.34:8000/news_details/1', 'Share title')
        ->facebook()
        ->twitter()
        ->linkedin('Extra linkedin summary can be passed here')
        ->whatsapp()
        ->getRawLinks();

    return view('News.news_details',['post'=>news::findorFail($id),'popularPost'=>news::orderBy('id','desc')->take(3)->get(),'url'=>$url,'share'=>$share]);
})->name('news_details');

Route::get('applyShowApplicant/{id}',[applicantController::class,'showApplicant'])->name('apply.showApplicant');

Route::resource('/apply',applicantController::class);
Route::resource('/news',newsController::class);
Route::post('/postImageNews',[uploadImageController::class,'storeTextEditorImage'])->name('postImageNews');
Route::resource('/user',UserController::class);
Route::resource('/job',JobController::class);


Blade::if('isRole',function ($role){
    return Auth::check() && Auth::user()->role == $role;
});

Route::group([],function(){
    Route::group(['prefix'=>'/manage_paper'], function(){
        Route::get('/listPaper/{type}/{id}',[paperController::class,'listPaper'])
            ->name('listPaper');

        Route::put('/addPaper/{type}/{id}',[paperController::class,'addPaper'])
            ->name('addPaper');

        Route::put('/updatePaper/{type}/{id}',[paperController::class,'updatePaper'])
            ->name('updatePaper');

        Route::get('/viewPaper/{id}/{name}',function($id,$name){
            $pathToFile = public_path('storage/document/technical_papers/'.$id.'/'.$name);
            return response()->file($pathToFile);
            // return view('Admin.technical_paper.viewPaper',['fileID'=>$id,'fileName'=>$name]);
        })->name('viewPaper');

        Route::delete('/deletePaper/{type}/{id}/{psID}',[paperController::class,'deletePaper'])
            ->name('deletePaper');
    });
});

Route::group([],function(){
    Route::group(['prefix'=>'/manage_access'], function(){

        Route::get('/assign/{id}',[accessController::class,'assignForm'])
            ->name('assign');

        Route::post('/assignPS/{userid}',[accessController::class,'processAssign'])
            ->name('assignPS');
    });
});

Route::group([],function () {
    Route::group(['prefix' => '/manage_product'], function () {

        //Product Category
        Route::get('/productCategory',[productController::class,'showProductCategory'])
            ->name('productCat');

        Route::get('/addProductCategory',[productController::class,'addProductCategory'])
            ->name('addProductCat');

        Route::post('/createProductCategory',[productController::class,'createProductCategory'])
            ->name('createProduct');

        Route::get('/showProductUpdateForm/{id}',[productController::class,'viewUpdateForm'])
            ->name('updateProductForm');

        Route::put('/updateCategoryProduct/{id}',[productController::class,'update'])
            ->name('updateProductCategory');

        Route::delete('/deleteProductCategory/{id}',[productController::class,'destroyProductCategory'])
            ->name('deleteProductCategory');

        Route::get('/viewProductCategory/{id}',[productController::class,'viewProductCategory'])
            ->name('viewProductCategory');

        // Product Section
        Route::get('/displaylistofProducts/{id}',[_productController::class,'showProductList'])
            ->name('listofProduct');

        Route::get('/addNewProductForm/{id}',[_productController::class,'showAddProductForm'])
            ->name('addProduct');

        Route::post('/addProduct',[_productController::class,'addNewProduct'])
            ->name('addProductDB');

        Route::get('/updateProductForm/{id}',[_productController::class,'displayUpdateForm'])
                ->name('displayUpdateProductForm');

        Route::put('/updateProduct/{id}',[_productController::class,'updateProduct'])
            ->name('updateProductDB');

        Route::delete('/deleteProduct/{id}/{catID}',[_productController::class,'destroyProduct'])
            ->name('deleteProduct');

        Route::get('/viewProductDetails/{id}',[_productController::class,'viewProductDetails'])
            ->name('viewProduct');

        Route::get('/viewProduct/{id}',[_productController::class,'viewProductBasedOnCategory'])
            ->name('viewProdBasedOnCat');

        Route::get('/viewProductID/{id}/{catID}',[_productController::class,'viewProductBasedOnID'])
            ->name('viewProductBasedOnID');
    });

    Route::group(['prefix' => '/manage_service'], function () {
        //Service Category
         Route::get('/serviceCategory',[serviceController::class,'showServiceCategory'])
             ->name('serviceCat');

//        Route::get('/serviceCategory',function(){
//                echo '<script>alert("In Development / Update: Remove Category from Services");
//                window.history.back();</script>';
//            })->name('serviceCat');

        Route::get('/addServiceCategory',[serviceController::class,'addServiceCategory'])
            ->name('addServiceCat');

        Route::post('/createServiceCategory',[serviceController::class,'createServiceCategory'])
            ->name('createService');

        Route::get('/showServiceUpdateForm/{id}',[serviceController::class,'viewUpdateForm1'])
            ->name('updateServiceForm');

        Route::put('/updateCategoryService/{id}',[serviceController::class,'update'])
            ->name('updateServiceCategory');

        Route::delete('/deleteServiceCategory/{id}',[serviceController::class,'destroyServiceCategory'])
            ->name('deleteServiceCategory');

        Route::get('/viewServiceCategory/{id}',[serviceController::class,'viewServiceCategory'])
            ->name('viewServiceCategory');

        //service Section
        Route::get('/displaylistofServices',[_serviceController::class,'showServiceList'])
            ->name('listofService');

        Route::get('/addNewServiceForm',[_serviceController::class,'showAddServiceForm'])
            ->name('addService');

        Route::post('/addService',[_serviceController::class,'addNewService'])
            ->name('addServiceDB');

        Route::get('/updateServiceForm/{id}',[_serviceController::class,'displayUpdateForm'])
            ->name('displayUpdateServiceForm');

        Route::put('/updateService/{id}',[_serviceController::class,'updateService'])
            ->name('updateServiceDB');

        Route::get('/viewServiceDetails/{id}',[_serviceController::class,'viewServiceDetails'])
            ->name('viewService');

        Route::get('/viewService/{id}',[_serviceController::class,'viewServiceBasedOnCategory'])
            ->name('viewServBasedOnCat');

        Route::get('/viewServiceID/{id}',[_serviceController::class,'viewServiceBasedOnID'])
            ->name('viewServiceBasedOnID');

        Route::delete('/deleteService/{id}',[_serviceController::class,'destroyService'])
            ->name('deleteService');
    });

});



Route::post('/update_job/{id}/{resp}',function ($id,$resp){
    dd($id);
})->name('update_job');

Route::get('/Update_Status/{id}',function ($id){
    $job = job::findorFail($id);

    if($job->status == false)
    {
        $job->status = true;
    }
    else{
        $job->status = false;
    }
    $job->save();
    return redirect()->route('job.index');
})->name('updateJobStatus');





Route::get('/Add Vacancy',function (){
    return view('Admin.addNewVacancy');
})->name('addVacancy');

Route::get('/Admin/Dashboard',function (){
    $totalUsers = User::all()->count();
    $totalVacancy = Job::where('status','=',true)->get()->count();
    $totalPaper = technical_paper::all()->count();
    $totalProduct = product::all()->count();
    $totalService = service::all()->count();
    $totalPS = $totalProduct + $totalService;
    $logs = LogActivity::logActivityLists();

    return view('Admin.dashboard',['totalUser'=>$totalUsers,'totalJob'=>$totalVacancy,'totalPaper'=>$totalPaper,'totalPS'=>$totalPS,'logs'=>$logs]);
})->name('adminDashboard')->middleware('auth');

Route::get('/Admin/Manage',function (){
    return view('Admin.manageAdmin');
})->name('manageAdmin');

Route::get('/', function () {
    return view('index',['post'=>news::orderBy('id','desc')->take(3)->get()]);
})->name('home');

Route::get('/product',function (){
    return view('product',['posts'=>category::where('role','=','Product')->get()]);
});

Route::get('/_news',function(){

    $news = news::paginate(6);
    return view('news',['posts'=>$news]);

})->name('showNews');

//Route::get('/Faazmiar_news',function(){
//    return view('news');
//})->name('web_news');

Route::get('/services',function(){
//    $serviceCategory = category::where('role','=','Service')->get();
    $service = service::all();
    return view('services',['posts'=>$service]);
});

Route::get('/career',function(){
    return view('careerList',['post'=>job::all()->where('status',true)]);
});

Route::get('/aboutUs',function (){
    return view('aboutUs');
});

Route::get('/trainingServices',function(){
    return view('services.trainingServices');
});


Route::group([],function (){
    Route::group(['prefix'=>'GeoScience'],function(){

        Route::get('/productInt',function(){
            return view('GeoScience.productDetailsInt');
        })->name('int');

        Route::get('/productCegal',function(){
            return view('GeoScience.productDetailsCegal');
        })->name('cegal');

        Route::get('/productEarthNet',function(){
            return view('GeoScience.productDetailsEarthNet');
        })->name('earthnet');

        Route::get('/productDetailsLogtek',function(){
            return view('GeoScience.productDetailsLogtek');
        })->name('logtek');

    });

    Route::group(['prefix'=>'Drilling'],function(){

        Route::get('/productDSIDDRAW',function(){
            return view('Drilling.productDetailsDSIDDRAW');
        })->name('dsiddraw');

        Route::get('/productProNova',function(){
            return view('Drilling.productDetailsProNova');
        })->name('pronova');

        Route::get('/productSekal',function(){
            return view('Drilling.productDetailsSekal');
        })->name('sekal');

        Route::get('/productSiteCom',function(){
            return view('Drilling.productDetailsSiteCom');
        })->name('sitecom');

        Route::get('/productStimline',function(){
            return view('Drilling.productDetailsStimline');
        })->name('stimline');

        Route::get('/productWaspRoma',function(){
            return view('Drilling.productDetailsWaspRoma');
        })->name('wasproma');

    });

    Route::group(['prefix'=>'Engineering'],function(){

        Route::get('/productDWOS',function(){
            return view('Engineering.productDetailsDWOS');
        })->name('dwos');

        Route::get('/productOliasoft',function(){
            return view('Engineering.productDetailsOliasoft');
        })->name('oliasoft');
    });

    Route::group(['prefix'=>'Production_Operation'],function(){

        Route::get('/productKairos',function(){
            return view('ProductionOperation.productDetailsKairos');
        })->name('kairos');

        Route::get('/productVisavi',function(){
            return view('ProductionOperation.productDetailsVisavi');
        })->name('visavi');
    });

    Route::group(['prefix'=>'services'],function(){

        Route::get('/wellPlanning',function(){
            return view('services.wellPlanningService');
        })->name('wellplanning');

        Route::get('/training',function(){
            return view('services.trainingServices');
        })->name('training');
    });


});
