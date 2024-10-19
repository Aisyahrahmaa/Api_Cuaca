<?php

namespace App\Http\Controllers\Api;

//import model 
use App\MOdels\Cuaca;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//import resource CuacasResource
use App\Http\Resources\CuacasResource;


class CuacasController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts
        $cuaca = cuaca::latest()->paginate(5);

        //return collection of posts as a resource
        return new CuacasResource(true, 'Data Cuaca', $cuaca);
    }
}