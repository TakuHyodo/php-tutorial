<?php
namespace App\Usecase\Company;

use App\Http\Payload;

class IndexUsecase
{
    public function run(): Payload
    {
        return (new Payload())
            ->setStatus(Payload::SUCCEED);
    }
}
