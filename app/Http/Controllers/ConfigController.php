<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InfoData;
use Session;
use Stancl\Tenancy\Tenant;

use Illuminate\Database\Eloquent\Model;

class ConfigController extends Controller
{
    public function configurations()
    {
        // recuperando el link de zoom para cargarlo en el boton
        $link_zoom = InfoData::select('data')
                                ->where('value','LINK-ZOOM')
                                ->where('status','TO USE')    
                                ->get();                      

        return view('welcome',["links" => $link_zoom]);
    }
}
