<?php

namespace Dommer1\ModelStatuses;

use Dommer1\ModelStatuses\Status;

trait HasStatuses {

    public function statuses() {
        return $this->morphMany(Status::class, 'model')->latest('id');
    }

    public function status() {
        return $this->statuses()->first();
    }

    public function setStatus($status, $data) {
        $this->statuses()->create([
            'status' => $status,
            'data' => $data,
        ]);
    }
}
