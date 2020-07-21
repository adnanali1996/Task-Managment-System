<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Task;
class TaskController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Task::latest()->paginate(7);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            "task" => "required|string|max:255",
        ]);
        return Task::create([
            "task" => $request["task"],
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $task = task::findOrFail($id);
        $this->validate($request,[
            "task" => "required|string|max:255",
        ]);
        $task->update($request->all());
        return ["message" => "Task Updated Successfully."];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $task = Task::findOrFail($id);
        $task->delete();
        return ['message' => 'Task Has Been Deleted'];
    }

    // MARK TASK AS COMPLETED
    public function markCompleted($id)
    {
        $task = Task::findOrFail($id);
        $task->completed = 1;
        $task->save();
        return ['message' => 'Completed'];
    }

    // MARK TASK AS INCOMPLTED
    public function markIncompleted($id)
    {
        $task = Task::findOrFail($id);
        $task->completed = 0;
        $task->save();
        return ['message' => 'Incompleted'];
    }
}
