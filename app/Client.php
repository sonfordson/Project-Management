<?php

namespace App;

use App\Project;
use App\Team;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * one-to-one relationship with project
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function project_client()
    {

        return $this->hasOne(Project::class, 'project_id');
    }

    /**
     * many-to-many relationship with project
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function project()
    {
        return $this->belongsToMany(Project::class)->withTimestamps();
    }

    /**
     * many-to-many relationship with team
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function team()
    {
        return $this->belongsToMany(Team::class)->withTimestamps();
    }
}
