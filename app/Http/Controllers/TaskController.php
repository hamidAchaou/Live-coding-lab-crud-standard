<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Repositories\TasksRepository;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    protected $tasksRepository;
    public function __construct(TasksRepository $TasksRepository){
        $this->tasksRepository = $TasksRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $projectId = $request->projectId;
        
        if($projectId) {
            $tasks = $this->tasksRepository->getTaskbyprojetId($projectId);
            return view("tasks.index", compact("tasks"));
        } else {
            $tasks = $this->tasksRepository->index();        
        }
        
        return view("tasks.index", compact("tasks"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
