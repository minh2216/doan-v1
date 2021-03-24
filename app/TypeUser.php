<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    protected $table = 'type_user';
    protected $fillable = [
        'id','title'
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
}
