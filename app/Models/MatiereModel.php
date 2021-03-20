<?php

namespace App\Models;

use CodeIgniter\Model;

class MatiereModel extends Model
{
    protected $table      = 'matiere';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $allowedFields = ['id', 'nom'];

    protected $validationRules    = [
        'nom'=>['label'=>'Nom', 'rules'=>'required|alpha_numeric_space|max_length(50)']
    ];
}
