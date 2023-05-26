<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $createdAt = 'createdAt';
    protected $updatedAt = 'updatedAt';

    public function getCreatedAtColumn()
    {
        return $this->createdAt;
    }

    public function getUpdatedAtColumn()
    {
        return $this->updatedAt;
    }
    use HasFactory;
}
