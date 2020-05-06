<?php

namespace App\Repositories\Interfaces;

use App\Task;

interface TaskRepositoryInterface
{
    /**
     * @return Task[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all();
}
