<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Checklist;
use App\Http\Requests\Web\ChecklistRequest;

class ChecklistController extends Controller
{
     //
     public function index(Request $request){
        $checklists = Checklist::all();
        return  view('checklist.index', ['checklists' =>  $checklists]);
    }


    public function show($id, Request $request){
        $checklist = Checklist::findOrFail($id);
        return  view('checklist.show', ['checklist' =>  $checklist]);
    }

    public function create(){
     
        return  view('checklist.create');
    }


    public function store(ChecklistRequest $request){
        
        //dd($request->image);
        
        $checklist = new Checklist();
        $checklist->name = $request->name;
        $checklist->is_completed = isset($request->status)? 1 : 0;

       if($request->has('image')){
           $path =\Storage::putFile('images', $request->file('image'));
           $checklist->file_name = pathinfo($path)['basename'];
       }


        if($checklist->save()){
            return redirect()->action('Web\ChecklistController@show', ['id' => $checklist->id]);
        } else {
            return redirect()->back()->with($request->all());
        }
        
    }


    public function edit($id, Request $request){
        $checklist = Checklist::findOrFail($id);
        return  view('checklist.edit', ['checklist' =>  $checklist]);
    }

    public function update($id, ChecklistRequest $request){
        $checklist = Checklist::findOrFail($id);
        $checklist->name = $request->name;
        $checklist->is_completed = isset($request->status)? 1 : 0;

   
        /*if($request->has('image')){
            //\Storage::delete('images/')
            $path =\Storage::putFile('images', $request->file('image'));
            $checklist->file_name = pathinfo($path)['basename'];
        }*/



        if($checklist->save()){
            return redirect()->action('Web\ChecklistController@show', ['id' => $checklist->id]);
        } else {
            return redirect()->back()->with($request->all());
        }
    }


    public function destroy($id, Request $request){
        $checklist = Checklist::findOrFail($id);
        if($checklist->delete()){
            return redirect()->action('Web\ChecklistController@index');
        }
        else{
            return redirect()->back();
        }
       
    }
}
