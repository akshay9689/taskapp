<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TaskController extends Controller
{
    public function index()
    {
         $data =  DB::table('tasks')->orderBy('id', 'DESC')->get();
         return view('task', ['data' => $data]);
    }

    public function cat_getById(Request $request){
    $id = $request->id;
         
    $data = DB::table('tasks')->find($id);
    $arr = array('success' => false, 'data' => '');
    if($data){

    $arr = array('success' => true, 'data' => $data);
     
    }

    echo json_encode($arr);
    
    }


    public function insert(Request $request)
    {
         $request->validate([

            'title' => 'required',
            'description' => 'required',
            'due_date' => 'required'
         ]);
         
         
         
         
         DB::table('tasks')->insert([
           
            'title' => $request->title,
            'description' => $request->description,
            'due_date' =>  $request->due_date,
         
         ]);

         return redirect(route('task'))->with('success', 'Task Successfully Added');
    }


    public function update(Request $request)
    {
         $request->validate([
            'title' => 'required',
            'description' => 'required',
            'due_date' => 'required'
         ]);
         $id= $request->id;
      
         $blog = DB::table('tasks')->find($id);
         
         

        DB::table('tasks')->where('id',$id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' =>  $request->due_date,
        ]);

        return redirect(route('task'))->with('success', 'Task Successfully Updated');
    }

    public function delete(Request $request)
    {
     
         $request->validate([
            'hidd2' => 'required',
            
         ]);

        $id= $request->hidd2;
        
        DB::table('tasks')->where('id',$id)->delete();

        return redirect(route('task'))->with('failed', 'Task Successfully Deleted');
    }

    public function change_status(Request $request)
    {
        
         $id= $request->id;
      
         $blog = DB::table('tasks')->find($id);
         
         

        DB::table('tasks')->where('id',$id)->update([
            'mark_as_complete' => $request->status,
        ]);

        echo "OK";
    }




}
