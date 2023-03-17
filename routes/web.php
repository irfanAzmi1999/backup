<?php

use App\Models\job;
use App\Models\news;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\newsController;
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
    return view('News.news_details',['post'=>news::findorFail($id),'popularPost'=>news::orderBy('id','desc')->take(3)->get()]);
})->name('news_details');

Route::resource('/news',newsController::class);
Route::resource('/user',UserController::class);
Route::resource('/job',JobController::class);

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
    return view('Admin.dashboard');
})->name('adminDashboard');

Route::get('/Admin/Manage',function (){
    return view('Admin.manageAdmin');
})->name('manageAdmin');

Route::get('/', function () {
    return view('index',['post'=>news::orderBy('id','desc')->take(3)->get()]);
})->name('home');

Route::get('/product',function (){
    return view('product');
});

Route::get('/_news',function(){

    $news = news::all();
    return view('news',['post'=>$news]);

})->name('showNews');

//Route::get('/Faazmiar_news',function(){
//    return view('news');
//})->name('web_news');

Route::get('/services',function(){
    return view('services');
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
