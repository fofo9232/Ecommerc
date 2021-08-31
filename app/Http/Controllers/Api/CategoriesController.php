<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainCategory;

class CategoriesController extends Controller
{
    public function index(){
      // $categories= MainCategory::select('id','name')->get();
      $default_lang = get_default_lang();
       $categories = MainCategory::select('id','name')->where('translation_lang', $default_lang)->get();
       return response()->json($categories);

    }
}
