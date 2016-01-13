<?php

namespace Sonford;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = [
        'title',
        'description',
        'project_status',
        'architecture',
        'platforms',
        'non_functional_requirements',
        'due_date',
        'user_id',
    ];

    /**
     * one-to-one relationship with Team
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * one-to-one relationship with client
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client_project()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * many-to-many relationship with team
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function teams()
    {
        return $this->belongsToMany(Team::class)->withTimestamps();
    }

    /**
     * many-to-many relationship with client
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function client()
    {

        return $this->belongsToMany(Client::class)->withTimestamps();

    }

    /**
     * one-to-many relationship with project
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function project()
    {
        return $this->hasMany(Feature::class, 'project_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function milestone()
    {
        return $this->hasMany(Milestone::class, 'project_id');
    }
}
