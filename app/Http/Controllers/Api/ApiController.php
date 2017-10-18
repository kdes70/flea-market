<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller as IlluminateController;

abstract class ApiController extends IlluminateController
{
    use DispatchesJobs, AuthorizesRequests;
}
