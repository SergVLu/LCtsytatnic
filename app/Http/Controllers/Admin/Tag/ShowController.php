<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Group;

class ShowController extends Controller
{
    public function __invoke(Tag $tag){
        // dd($tag);
    return view('admin.tag.show', compact('tag'));
    }
}
