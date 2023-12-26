<?php

namespace App\Http\Controllers\Admin\Group;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;

class ShowController extends Controller
{
    public function __invoke(Group $group){
        // dd($group);
    return view('admin.group.show', compact('group'));
    }
}
