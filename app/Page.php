<?php

namespace Zeropingheroes\Lanager;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Page extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'published'
    ];

    /**
     * Scope a query to only show pages visible to the user.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeVisible($query)
    {
        if (Auth::user() && Auth::user()->can('update', new Page)) {
            return $query;
        } else {
            return $query->where('published', '=', 1);
        }
    }
}