<?php

namespace App\Usecase\Company;

use App\Http\Payload;
use App\Http\Requests\Company\IndexRequest;
use App\Models\Company;

class CreateUsecase
{
    public function run(): Payload
    {
        return (new Payload())
            ->setStatus(Payload::SUCCEED);
    }
}
