<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table="members";
    protected $primaryKey= "member_id";
    protected $fillable = ["member_name","password","email",
        "phoneNumber","gender","birthday","avatar","status"];
}
