<?php

namespace App\Services;

use App\Services\Interfaces\TaskServiceInterface;
use App\Repositories\Interfaces\TaskRepositoryInterface;

class TaskService implements TaskServiceInterface
{
    /**
     * @var TaskRepositoryInterface
     */
    protected $taskRepository;

    /**
     * TaskService constructor.
     * @param TaskRepositoryInterface $taskRepositoryInterface
     */
    public function __construct(TaskRepositoryInterface $taskRepositoryInterface)
    {
        $this->taskRepository = $taskRepositoryInterface;
    }
}
