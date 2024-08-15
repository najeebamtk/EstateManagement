<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable=['name','location','price','address','image1','image2','type','description','status','area','beds','baths','garages','amenities','agent_id'];

    public function setAmenitiesAttribute($value)
    {
        $this->attributes['amenities'] = json_encode($value);
    }

    public function getAmenitiesAttribute($value)
    {
        return $this->attributes['amenities'] = json_decode($value);
    }
}
