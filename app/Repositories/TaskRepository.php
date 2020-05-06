<?php

namespace App\Repositories;

use App\Task;
use App\Repositories\Interfaces\TaskRepositoryInterface;

class TaskRepository implements TaskRepositoryInterface
{
    /**
     * @var Task
     */
    protected $task;

    /**
     * TaskRepository constructor.
     * @param Task $task
     */
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    /**
     * @return Task[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return $this->task->all();
    }
}
