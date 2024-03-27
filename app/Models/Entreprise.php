<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    protected $table = 'entreprises';
    public $timestamps = true;


    protected $fillable = [
        'name',
        'created_at',
        'location',
    ];

    // /**
    //  * Get all of the comments for the Entreprise
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function projects(): HasMany
    // {
    //     return $this->hasMany(Project::class, 'foreign_key', 'local_key');
    // }
    // /**
    //  * The roles that belong to the Entreprise
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    //  */
    // public function roles(): BelongsToMany
    // {
    //     return $this->belongsToMany(Role::class, 'role_user_table', 'user_id', 'role_id');
    // }
    /*public function projects()
    {
        return $this->belongsToMany(Project::class);

    }*/


    public function projects()
    {
        return $this->belongsToMany(Project::class, 'entreprisesprojects', 'entreprise_id', 'project_id');
    }

}
