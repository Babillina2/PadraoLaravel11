<?php

namespace App\Services;

use App\Repositories\VeiculoRepository;

class VeiculoService
{
    private $repository;

    public function __construct(VeiculoRepository $repository) {
        $this->repository = $repository;
    }
    public function index() {       
        return $this->repository->index();
    }

    public function show($id) {
        return $this->repository->show($id);
    }

    public function update(array $data, $id) {
        return $this->repository->update($data, $id);
    }

    public function destroy($id) {
        return $this->repository->destroy($id);
    }

    public function store(array $data) {
        return $this->repository->store($data);
    }
}