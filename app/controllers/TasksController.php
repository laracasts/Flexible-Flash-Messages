<?php

use Acme\Tasks\DbTaskRepository;

class TasksController extends BaseController {

    /**
     * @var DbTaskRepository
     */
    private $taskRepository;

    function __construct(DbTaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

}