<?php

namespace Laravel\Repositories;

use Laravel\Models\Test;

class TestRepository extends BaseRepository
{
    public function __construct(Test $model)
    {
        parent::__construct($model);
    }
}
