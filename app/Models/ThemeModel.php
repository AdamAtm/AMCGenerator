<?php

namespace App\Models;

use CodeIgniter\Model;

class ThemeModel extends Model
{
    protected $table      = 'theme';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $allowedFields = ['id', 'titre'];

    protected $validationRules    = [
        'titre'=>['label'=>'Titre', 'rules'=>'required|alpha_numeric_space|max_length(50)']
    ];
}
