<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Group;


class IndexController extends Controller
{
    public function __invoke(){
        $categories= Category::get();
        $groups= Group::get();
        // dd($categories);
    return view('admin.category.index', compact('categories','groups'));
    }
}
