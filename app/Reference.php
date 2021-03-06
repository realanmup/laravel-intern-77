<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'contact', 'designation', 'user_id'
    ]; 

    public function user() {
        return $this->belongsTo(User::class);
    }
}
