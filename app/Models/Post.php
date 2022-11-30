<?php

namespace App\Models;

use CodeIgniter\Model;

class Post extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'post';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps   = true;
    protected $returnType       = 'array';
    protected $protectFields    = false;
}
