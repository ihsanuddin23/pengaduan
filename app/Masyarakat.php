<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Masyarakat extends Authenticatable
{
    use Notifiable;

    protected $table = 'masyarakats';
    
}