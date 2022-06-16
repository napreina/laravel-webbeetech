<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'name', 'url', 'parent_id'
    ];

    public function children() {
        return $this->childrenMenus()->with('children');
    }

    public function childrenMenus() {
        return $this->hasMany(Self::class, 'parent_id', 'id');
    }
}
