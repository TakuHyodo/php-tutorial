<?php


namespace App\Usecase\Car;

use App\Http\Payload;
use App\Models\Car;
use App\Models\Company;

class EditUsecase
{
    public function run(Car $car): Payload
    {
        $companies = Company::all()->pluck('name', 'id'); //追加 (選択肢用)
        return (new Payload())
            ->setStatus(Payload::SUCCEED)
            ->setOutput(compact('car','companies'));
    }
}
