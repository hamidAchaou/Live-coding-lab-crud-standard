<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Repositories\ProjectsRepository;
use App\Repositories\TasksRepository;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    protected $tasksRepository;
    protected $projectsRepository;
    public function __construct(TasksRepository $TasksRepository, ProjectsRepository $projectsRepository){
        $this->tasksRepository = $TasksRepository;
        $this->projectsRepository = $projectsRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $projectId = $request->projectId;
        
        if($projectId) {
            $tasks = $this->tasksRepository->getTaskbyprojetId($projectId);
            $project = $this->projectsRepository->find($projectId);
            return view("tasks.index", compact("tasks", "project"));
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
        $Projects = $this->projectsRepository->index();
        return view("tasks.create", compact("Projects"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $validatedData = $request->validated();
        $this->tasksRepository->create($validatedData);
    
        return redirect()->route('projects.tasks', ['projectId' => $request->projetId])->with('success', "Task successfully created");
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
