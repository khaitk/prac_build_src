<?php

namespace Laravel\Services;

use Laravel\Repositories\TestRepository;

class TestService extends BaseService
{
    public function __construct(TestRepository $repository)
    {
        parent::__construct($repository);
    }
}
