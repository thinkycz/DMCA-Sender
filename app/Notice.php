<?php

namespace App;

/**
 * Class Notice
 * @package App
 */
class Notice extends \Eloquent
{
    /**
     * @var array
     */
    protected $fillable =
        [
            'id',
            'infringing_title',
            'infringing_link',
            'original_link',
            'additional_info',
            'user_id',
            'provider_id',
            'template',
        ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function provider()
    {
        return $this->belongsTo('App\Provider');
    }
}
