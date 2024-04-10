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
    
        return redirect('/tasks'); // Redirect to the tasks page after successful save
    }

    public function UpdateTaskAsCompleted($id){
        $task=Task::find($id);
        $task->iscompleted=1;
        $task->save();
        return redirect()->back();
    }

    public function UpdateTaskAsNotCompleted($id){
        $task=Task::find($id);
        $task->iscompleted=0;
        $task->save();
        return redirect()->back();
    }

    public function DeleteTask($id){
        $task=Task::find($id);

        $task->delete();
        return redirect()->back();
    }


}
