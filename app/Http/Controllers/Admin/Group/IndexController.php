<?php

namespace App\Http\Controllers\Admin\Group;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;


class IndexController extends Controller
{
    public function __invoke(){
        $groups= Group::get();
        // dd($groups);
    return view('admin.group.index', compact('groups'));
    }
}
