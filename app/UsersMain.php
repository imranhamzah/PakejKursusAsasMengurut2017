<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersMain extends Model
{
    public $timestamps = false;
    protected $table = "users_main";
    protected $primaryKey="user_id";
    protected $connection = "mysql";
}
