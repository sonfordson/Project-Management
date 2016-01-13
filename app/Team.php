<?php

namespace Sonford;

use Sonford\Auth;
use Sonford\Project;
use Sonford\User;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * one-to-one relationship with project
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public  function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
    /**
     * many-to-many relationship with project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    /**
     * many-to-many relationship with User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * one-to-many relationship with User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
