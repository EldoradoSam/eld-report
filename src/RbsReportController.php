<?php

namespace eld\report;

use Illuminate\Http\Request;
USE App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class RbsReportController extends Controller
{
    //

    public function showReport(){
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Report</h1>');
        return $pdf->stream();
    }
}
