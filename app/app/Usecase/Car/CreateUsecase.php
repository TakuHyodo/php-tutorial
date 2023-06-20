<?php

namespace App\Usecase\Car;

use App\Http\Payload;
use App\Http\Requests\Car\IndexRequest;
use App\Models\Car;

class CreateUsecase
{
    public function run(): Payload
    {
        return (new Payload())
            ->setStatus(Payload::SUCCEED);
    }
}
