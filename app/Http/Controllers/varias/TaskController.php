<?php

namespace App\Http\Controllers\varias;

use App\modal\varias\Task;
use Brian2694\Toastr\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function index()
    {
        return Task::where('archive', 0)->orderBy('id', 'desc')->get();
    }

    public function archived()
    {
        return Task::where('archive', 1)->orderBy('id', 'desc')->get();
    }

    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'body' => 'required|max:500'
        ]);

        return Task::create(['body' => request('body')]);
    }

    public function edit(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'body' => 'required|max:500'
        ]);

        $task = Task::findOrFail($request->id);
        $task->body = $request->body;
        $task->save();
    }

    public function archive($id)
    {
        $task = Task::findOrFail($id);
        $task->archive = ! $task->archive;
        $task->save();
        //Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]);
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
    }
}
