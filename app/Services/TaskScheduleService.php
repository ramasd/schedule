<?php

namespace App\Services;

use App\Repositories\Interfaces\TaskScheduleRepositoryInterface;
use App\Services\Interfaces\TaskScheduleServiceInterface;

class TaskScheduleService implements TaskScheduleServiceInterface
{
    /**
     * @var TaskScheduleRepositoryInterface
     */
    protected $taskScheduleRepository;

    /**
     * TaskScheduleService constructor.
     * @param TaskScheduleRepositoryInterface $taskScheduleRepositoryInterface
     */
    public function __construct(TaskScheduleRepositoryInterface $taskScheduleRepositoryInterface)
    {
        $this->taskScheduleRepository = $taskScheduleRepositoryInterface;
    }
}
