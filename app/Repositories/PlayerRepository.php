<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PlayerRepository implements RepositoryInterface {
	
	protected $model;

	public function __construct(Model $model) {
		$this->model = $model;
	}

	public function getModel() {
		return $this->model;
	}

	public function setModel($model) {
		$this->model = $model;
		return $this;
	}

	public function with($relations) {
		return $this->model->with($relations);
	}

	public function all() {
		return $this->model->select('id', \DB::raw("CONCAT(first_name,' ',second_name) AS full_name"))->get();
	}

	public function store(array $data) {
		return $this->model->firstOrCreate($data);
	}

	public function update(array $data, $id) {
		$record->update($data, $id);
		return $this->model->findOrFail($id);
	}

	public function show($id) {
		return $this->model->findOrFail($id);
	}

	public function delete($id) {
		return $this->model->delete($id);
	}
}