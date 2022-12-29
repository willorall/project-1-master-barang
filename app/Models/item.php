<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class item extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function link_price_list()
    {
        return $this->hasMany(price_list::class,'id_items','id');
    }
    public function link_price_list_price()
    {
        return $this->hasMany(price_list::class,'price','id');
    }
    public function link_price_list_now()
    {
        return $this->hasOne(price_list::class,'id','id_price_list');
    }
    public function link_proses()
    {
        return $this->hasmany(proses::class,'id_item','id');
    }
}
