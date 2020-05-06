<?php

namespace App\Services\Interfaces;

interface TaskServiceInterface
{
    /**
     * @return \App\Task[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index();
}
