<?php

namespace App\Utils;

class Validate {
    private $required_fields = array(
        'nome',
        'nascimento',
        'cpf',
        'cep',
        'estado',
        'cidade',
        'bairro',
        'endereco'
    );

    public function isEmpty($value) {
        return $value === '';
    }

    public function isFilled($data) {
        
        foreach ($this->required_fields as $field) {
            if ($this->isEmpty($data[$field])) return false;
        }
    
        return true;
    }
}
