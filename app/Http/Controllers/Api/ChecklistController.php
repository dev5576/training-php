<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Checklist;

class ChecklistController extends Controller
{
    //
    public function index(Request $request){
        //echo 'Hello';
        $checklists = Checklist::all();
        //dd($checklists);
        return response()->json($checklists);
    }
}
