<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proses extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function link_master()
    {
        return $this->hasmany(master::class,'id_proses','id');
    }
    public function link_master1()
    {
        return $this->belongstomany(master::class);
    }
    public function link_item()
    {
        return $this->hasMany(item::class,'id','id_item');
    }
}
