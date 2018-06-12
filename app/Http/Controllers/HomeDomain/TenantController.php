<?php
/**
 * Created by PhpStorm.
 * User: nitishkumar
 * Date: 12/6/18
 * Time: 5:37 PM
 */

namespace App\Http\Controllers\HomeDomain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function create(Request $request)
    {
        dd($request);
    }

    public function delete()
    {}
}
