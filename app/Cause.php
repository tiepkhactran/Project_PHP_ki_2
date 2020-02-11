<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    protected $table="causes";
    protected $primaryKey= "cause_id";
    protected $fillable = ["cause_name","cause_money"];
}
