<?php 
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository {
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    abstract function getFieldData():array;
    abstract function model():string;

    public function index(){
       return $this->model->paginate(4);
    }

    // find
    public function find($projectId) {
        return $this->model->findOrFail($projectId);
    }
    // Create 
    public function create($validatedata){
        return  $this->model->create($validatedata);
    
    }

    // update
    public function update(array $validatedData, $id) {
    
        $data = $this->model->find($id);
        if(!$data) {
          return abort(404,"tasks not found");
        }
        
        return $data->update($validatedData);
    
      }

    //   delete
    public function delete($id) {
        $data = $this->model->find($id);
        if(!$data) {
          return abort(404);
        }
    }
}