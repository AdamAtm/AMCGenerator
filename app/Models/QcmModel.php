<?php

namespace App\Models;

use CodeIgniter\Model;

class QcmModel extends Model
{
    protected $table      = 'qcm';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $allowedFields = ['id', 'nom', 'header', 'idMatiere', 'idTheme'];

    protected $validationRules    = [
        'nom'=>['label'=>'nom', 'rules'=>'required|alpha_numeric_space|max_length(50)'],
        'header'=>['label'=>'header', 'rules'=>'required|alpha_numeric_space'],
        'idMatiere'=>['label'=>'Matière', 'rules'=>'required|integer'],
        'idTheme'=>['label'=>'Thème', 'rules'=>'required|integer'],
    ];
}
