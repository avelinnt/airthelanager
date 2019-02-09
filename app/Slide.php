<?php

namespace Zeropingheroes\Lanager;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = [
        'lan_id',
        'name',
        'content',
        'position',
        'published',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function lan()
    {
        return $this->belongsTo('Zeropingheroes\Lanager\Lan');
    }
}
