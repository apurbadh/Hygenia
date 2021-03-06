<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Doctor extends Model
{
    use HasFactory;

    public function user()
    {
        return User::find($this->user_id);
    }
}
