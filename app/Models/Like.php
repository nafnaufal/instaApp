<?php

namespace App\Models;

use CodeIgniter\Model;

class Like extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'like';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps   = true;
    protected $returnType       = 'array';
    protected $protectFields    = false;
}
