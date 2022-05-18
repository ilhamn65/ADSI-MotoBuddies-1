<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceDetailsController extends Controller
{
    public function index(Service $service)
    {

        return view('services.details', [
            'service' => $service
        ]);
    }
}
