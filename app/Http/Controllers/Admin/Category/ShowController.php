<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Group;

class ShowController extends Controller
{
    public function __invoke(Category $category){
        // dd($category);
    return view('admin.category.show', compact('category'));
    }
}
