<?php

namespace App\Repositories;

class PadraoRepository
{
    protected $model;
    public function show($id) {
        return $this->model::findOrFail($id);
    }
    public function store(array $data) {
        return $this->model::create($data);
    }
    public function update(array $data, int $id) {
        $objeto = $this->model::find($id);
        return $objeto->update($data);
    }
    public function destroy(int $id) {
        $objeto = $this->model::find($id);
        $objeto->delete();
    }
    public function index() {
        return $this->model::all();
    }

}