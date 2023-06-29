<?php

namespace App\Usecase\Car;

use App\Http\Payload;
use App\Models\Car;
use App\Models\Company;

//追加

class CreateUsecase
{
    public function run(): Payload
    {
        $companies = Company::all()->pluck('name', 'id'); //追加 (選択肢用)
        return (new Payload())
            ->setStatus(Payload::SUCCEED)
            ->setOutput(compact('companies'));
    }
}
