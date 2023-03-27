<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class invoiceController extends Controller
{
    //
    public function index()
    {
        $pdf=PDF::loadView('createInvoice');
        return $pdf->download('new.pdf');
    }

    



}
