<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Group;

class EditController extends Controller
{
    public function __invoke(Category $category){
        // dd($category);
        $groups=Group::get();
    return view('admin.category.edit', compact('category','groups'));
    }
}
