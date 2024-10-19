<?php

namespace App\Http\Controllers\Api;

use App\Models\Kota;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\KotasResource;

class KotasController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts
        $kota = Kota::latest()->paginate(5);

        //return collection of posts as a resource
        return new KotasResource(true, 'Data Kota', $kota);
    }
}
