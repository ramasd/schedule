<?php

namespace App\Repositories;

use App\TaskFile;
use App\Repositories\Interfaces\TaskFileRepositoryInterface;

class TaskFileRepository implements TaskFileRepositoryInterface
{
    /**
     * @var TaskFile
     */
    protected $taskFile;

    /**
     * TaskFileRepository constructor.
     * @param TaskFile $taskFile
     */
    public function __construct(TaskFile $taskFile)
    {
        $this->taskFile = $taskFile;
    }
}
