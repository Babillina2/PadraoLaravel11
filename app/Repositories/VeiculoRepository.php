<?php

namespace App\Repositories;

use App\Models\Veiculo;

class VeiculoRepository extends PadraoRepository
{

    public function __construct(Veiculo $veiculo) {
        $this->model = $veiculo;
    }    
   

}

