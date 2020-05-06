<?php

namespace App\Services;

use App\Repositories\Interfaces\TaskFileRepositoryInterface;
use App\Services\Interfaces\TaskServiceInterface;

class TaskFileService implements TaskServiceInterface
{
    /**
     * @var TaskFileRepositoryInterface
     */
    protected $taskFileRepository;

    /**
     * TaskFileService constructor.
     * @param TaskFileRepositoryInterface $taskFileRepositoryInterface
     */
    public function __construct(TaskFileRepositoryInterface $taskFileRepositoryInterface)
    {
        $this->taskFileRepository = $taskFileRepositoryInterface;
    }
}
