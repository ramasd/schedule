<?php

namespace App\Repositories;

use App\TaskSchedule;
use App\Repositories\Interfaces\TaskScheduleRepositoryInterface;

class TaskScheduleRepository implements TaskScheduleRepositoryInterface
{
    /**
     * @var TaskSchedule
     */
    protected $taskSchedule;

    /**
     * TaskScheduleRepository constructor.
     * @param TaskSchedule $taskSchedule
     */
    public function __construct(TaskSchedule $taskSchedule)
    {
        $this->taskSchedule = $taskSchedule;
    }
}
