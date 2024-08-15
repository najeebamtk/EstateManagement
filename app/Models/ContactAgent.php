<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactAgent extends Model
{
    use HasFactory;
    protected $fillable=['name','comment','email','user_id','agentid'];

}
