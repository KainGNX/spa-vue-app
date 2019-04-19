<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpaVueController extends Controller
{
    /**
     * Index vue
     *
     * @return Illuminate\Support\Facades\View
     */
    public function index()
    {
        return view('spa-vue-app');
    }
}
