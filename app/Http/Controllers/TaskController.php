<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function store(Request $request){

        $task=new Task;

        $this->validate($request,[
            'task'=>'required|max:255|min:5',
        ]);

        $task->task=$request->task;
        $task->save();

        $data=Task::all();
        // dd($data);
        
        return view('tasks')->with('tasks', $data);
        
        // return view('/task')
        // dd($request->all());
    }

    public function UpdateTaskAsCompleted($id){
        $task=Task::find($id);
        $task->iscompleted=1;
        $task->save();
        return redirect()->back();
    }
}
