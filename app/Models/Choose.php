<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choose extends Model
{
    use HasFactory;
    protected $table = 'entreprisesprojects';
    public $timestamps = false;


    protected $fillable = [
        'entreprise_id',
        'project_id',
    ];
}
