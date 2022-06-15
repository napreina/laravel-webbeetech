<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{
    protected $fillable = [
        'start', 'end', 'event_id', 'name'
    ];

    public function event() {
        return $this->belongsTo(Event::class);
    }
}
