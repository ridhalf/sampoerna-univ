<?php

use App\Http\Controllers\ArticleController;
use \App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\LandingPageController;

Route::get('/test', function () {
    return view('admin.articles.test');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/auth/login', function () {
        return view('admin.login');
    });

    Route::post('/articles/{article}/update',[ArticleController::class,'update'])->name('articles.update');
    Route::post('/articles/datatable',[ArticleController::class,'datatable'])->name('articles.datatable');
    Route::resource('articles', ArticleController::class)->except('update');

    Route::post('/users/{user}/update',[UserController::class,'update'])->name('users.update');
    Route::post('/users/datatable',[UserController::class,'datatable'])->name('users.datatable');
    Route::resource('users', UserController::class)->except('update');
});
Route::middleware(['guest'])->group(function () {
    Route::get('/',[LandingPageController::class,'index'])->name('landingpage');
    Route::get('/sampoerna-difference', [LandingPageController::class,'sampoerna_difference'])->name('sampoerna-difference');
    Route::get('/academic-registry', [LandingPageController::class,'academic_registry'])->name('academic-registry');
    Route::get('/accreditation', [LandingPageController::class,'accreditation'])->name('accreditation');
    Route::get('/admission', [LandingPageController::class,'admission'])->name('admission');
    Route::get('/career', [LandingPageController::class,'career'])->name('career');
    Route::get('/cetl', [LandingPageController::class,'cetl'])->name('cetl');
    Route::get('/contact', [LandingPageController::class,'contact'])->name('contact');
    Route::get('/core-curriculum', [LandingPageController::class,'core_curriculum'])->name('core-curriculum');
    Route::get('/faculties', [LandingPageController::class,'faculties'])->name('faculties');
    Route::get('/faq', [LandingPageController::class,'faq'])->name('faq');
    Route::get('/faculty-of-arts-and-science', [LandingPageController::class,'fas'])->name('fas');
    Route::get('/faculty-of-engineering-and-technology', [LandingPageController::class,'fet'])->name('fet');
    Route::get('/faculty-of-bussiness', [LandingPageController::class,'fob'])->name('fob');
    Route::get('/faculty-of-education', [LandingPageController::class,'foe'])->name('foe');
    Route::get('/governance-and-administration', [LandingPageController::class,'governance'])->name('governance-and-administration');
    Route::get('/news', [LandingPageController::class,'news'])->name('news');
    Route::get('/news/{slug}', [LandingPageController::class,'news_detail'])->name('news-detail');
    Route::get('/pathway', [LandingPageController::class,'pathway'])->name('pathway');
    Route::get('/qair', [LandingPageController::class,'qair'])->name('qair');
    Route::get('/requirements', [LandingPageController::class,'requirements'])->name('requirements');
    Route::get('/international-student', [LandingPageController::class,'international_student'])->name('international-student');
    Route::get('/academics', [LandingPageController::class,'academics'])->name('academics');
    Route::get('/facilities', [LandingPageController::class,'facilities'])->name('facilities');
    Route::get('/student-and-parent-advisory-center', [LandingPageController::class,'spac'])->name('spac');
    Route::get('/student-goverment', [LandingPageController::class,'student_goverment'])->name('student-goverment');
    Route::get('/student-rights-and-responsibility', [LandingPageController::class,'student_rights_and_responsibility'])->name('student-rights-and-responsibility');
    Route::get('/student-affairs', [LandingPageController::class,'student_affairs'])->name('student-affairs');
    Route::get('/university-admission', [LandingPageController::class,'university_admission'])->name('university-admission');
    Route::get('/safety-and-environment', [LandingPageController::class,'safety_and_environment'])->name('safety-and-environment');
    Route::get('/library', [LandingPageController::class,'library'])->name('library');
    Route::get('/campus-life', [LandingPageController::class,'campus_life'])->name('campus-life');
    Route::get('/about', [LandingPageController::class,'about_us'])->name('about-us');




    Route::get('/partials/header', function(){
        return view('guest.partials.header');
    })->name('partials.header');
    Route::get('/partials/footer', function(){
        return view('guest.partials.footer');
    })->name('partials.footer');
    Route::get('/partials/floating', function(){
        return view('guest.partials.floating');
    })->name('partials.floating');
});


Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);
