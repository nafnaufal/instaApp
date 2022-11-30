<?php

namespace App\Models;

use CodeIgniter\Model;

class Comment extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'comment';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps   = true;
    protected $returnType       = 'array';
    protected $protectFields    = false;
}
