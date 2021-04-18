<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index() {

        $categories = Category::categories();

        return response()->json(['categories' => $categories], 200);
    }
}
