<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    /**
     * many-to-many relationship with feature
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function feature()
    {
        return $this->belongsToMany(Feature::class)->withTimestamps();
    }

    /**
     * one-to-many relationship with project
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * one-to-many relationship with  feature
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function features()
    {
        return $this->belongsTo(Feature::class);
    }
}
