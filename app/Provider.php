<?php

namespace App;

class Provider extends \Eloquent
{
    public $timestamps = false;

    protected $fillable = ['name', 'copyright_email'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notices()
    {
        return $this->hasMany('App\Notices');
    }
}
