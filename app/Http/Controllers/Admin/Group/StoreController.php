<?php

namespace App\Http\Controllers\Admin\Group;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Group\StoreRequest;
use App\Models\Group;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        Group::firstOrCreate($data);
    return redirect()->route('admin.group');
    }
}
