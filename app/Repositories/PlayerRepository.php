<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

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
		$this->model->select('id', 'full_name')->get();
	}

	public function create(array $attributes) {
		return $this->model->create($attributes);
	}

	public function update(array $attributes, $id) {
		$record = $this->model->findOrFail($id);
		return $record->update($attributes);
	}

	public function show($id) {
		return $this->model->findOrFail($id);
	}

	public function delete($id) {
		$record = $this->model->find($id);
		$record->delete();
	}
}