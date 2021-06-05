<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facilities extends Model {

    protected $table = 'facilities';

    const TYPE_SELECT = 'select';
    const TYPE_TEXT = 'text';
    const MODULE_PRODUCT = 'room';

    protected $fillable = [
        'title', 'parent_id', 'type', 'module','images'
    ];
    public $timestamps = false;

    public function products() {
        return $this->belongsToMany('\App\Room', 'room_facilities', 'facilities_id', 'room_id');
    }

}
