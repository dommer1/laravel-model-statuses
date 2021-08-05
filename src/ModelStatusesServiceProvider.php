<?php

namespace Dommer1\ModelStatuses;

use Illuminate\Support\ServiceProvider;

class ModelStatusesServiceProvider extends ServiceProvider {

    public function boot() {
        $this->publishes([
            __DIR__ . '/../database/migrations/create_statuses_table.php.stub' => database_path('migrations/' . date('Y_m_d_His') . '_create_statuses_table.php')
        ], 'migrations');
    }
}
