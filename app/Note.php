<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Note extends Model
{
    use Notifiable;
    protected $table='note';
    protected $fillable=['n_content','n_title'];


}
