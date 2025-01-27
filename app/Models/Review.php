<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'room_id', 'ratings'];


    public function clients()
    {
        return $this->belongsTo(Client::class);
    }
}
