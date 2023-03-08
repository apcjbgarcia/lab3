<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'guest';
    protected $allowedFields = ['name', 'email', 'comment'];
    
    public function getGuest()
    {
            return $this->findAll();
    }
}