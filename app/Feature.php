<?php

namespace Sonford;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    /**
     * many-to-many relationship with  milestone
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function milestone()
    {

        return $this->belongsToMany(Milestone::class);
    }

    /**
     * one-to-many relationship with  feature
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function milestones()
    {
        return $this->hasMany(Milestone::class, 'milestone_id');
    }
}
