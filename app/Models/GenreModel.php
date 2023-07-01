<?php

namespace App\Models;
use CodeIgniter\Model;

class GenreModel extends Model{

    protected $table = "genre";
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = [];
    
    public function getAllGenre()
    {
        return $this->findAll();
    }
}
