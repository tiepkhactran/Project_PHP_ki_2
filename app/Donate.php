<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $table="donaters";
    protected $primaryKey= "donater_id";
    protected $fillable = ["cause_id","member_id","member_name","donater_money","created_at","updated_at"];
}
