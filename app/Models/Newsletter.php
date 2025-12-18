<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $table = "newsletters";

    protected $primaryKey = "id_email";

    protected $fillable = ['email'];
}
