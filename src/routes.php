<?php


use Illuminate\Support\Facades\Route;
use eld\report\RbsReportController;

Route::get('report',function(){
    echo 'Hello Rbs Report';
});

Route::get('showReport',[RbsReportController::class,'showReport']);