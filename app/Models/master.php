<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function link_item()
    {
        return $this->hasmany(item::class,'id','id_raw_items');
    }
    public function link_item1()
    {
        return $this->hasmany(item::class,'id','id_items');
    }
    public function link_process()
    {
        return $this->hasMany(proses::class,'id','id_proses');
    }
    public function link_process1()
    {
        return $this->hasmany(proses::class,'id','id');
    }
}
