<?php

namespace Dommer1\ModelStatuses;

use Illuminate\Database\Eloquent\Model;

class Status extends Model {

    protected $guarded = [];

    protected $casts = [
        'data' => 'json'
    ];

    public function model() {
        return $this->morphTo();
    }
}
