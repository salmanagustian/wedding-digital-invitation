<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table      = 'guest_book';
    public    $guarded    = [];
    public    $timestamps = true;

    public function commented_at()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('d F Y');
    }
}
