<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class URL extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_url';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "booting" method of the model.
     *
     * @return void
     */

    protected static function boot()
    {
        parent::boot();

        // URL::creating(function ($url) {
        //     $url->id        = uniqid();
        //     $url->clicks    = 0;

        //     $url->save();
        // });
    }
}
