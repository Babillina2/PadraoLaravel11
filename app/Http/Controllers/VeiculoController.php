<?php

namespace App\Http\Controllers;

use App\Http\Requests\VeiculoRequest;
use App\Models\Veiculo;
use App\Services\VeiculoService;

class VeiculoController extends Controller
{
    protected $service;
    public function __construct(VeiculoService $service)
    {
        $this->service = $service;
    }
    public function index()
    {
        return $this->service->index();
    }

    public function show(int $id)
    {
        return $this->service->show($id);
    }

    public function store(VeiculoRequest $request): Veiculo
    {
        $validated = $request->validated();
        return $this->service->store($validated);
    }

    public function update(VeiculoRequest $request, int $id): Veiculo
    {
        $validated = $request->validated();
        return $this->service->update($validated, $id);
    }

    public function destroy(int $id)
    {
        $this->service->destroy($id);
        $retorno = [
            "message" => "success"
        ];
        return json_encode($retorno);
    }
}
