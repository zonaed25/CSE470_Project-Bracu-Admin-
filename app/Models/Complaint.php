<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = [
        'user_id', 'fee', 'name_of_fee'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
