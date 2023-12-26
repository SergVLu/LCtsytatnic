<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(){
        $groups= Group::get();
    return view('admin.category.create',compact('groups'));
    }
}
