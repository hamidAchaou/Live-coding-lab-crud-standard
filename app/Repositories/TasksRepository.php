<?php

 namespace App\Repositories;

use App\Models\Task;
use App\Repositories\BaseRepository;

 class TasksRepository extends BaseRepository {
    public function __construct(Task $task){
        $this->model = $task;
    }
    protected $fieldTasks = [
        'nom',
        'description',
        'projetId',
    ];
    public function getFieldData():array{
        return $this->fieldTasks;
    }
    public function model():string{
        return Task::class;
    }

    // get Tasks By Projects Id
    public function  getTaskbyprojetId($projetId){
        return $this->model->where('projetId', $projetId)->paginate(4);
         
    }
 }