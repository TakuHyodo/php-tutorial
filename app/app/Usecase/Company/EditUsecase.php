<?php


namespace App\Usecase\Company;

use App\Http\Payload;
use App\Models\Company;

class EditUsecase
{
    public function run(Company $company): Payload
    {
        return (new Payload())
            ->setStatus(Payload::SUCCEED)
            ->setOutput(compact('company'));
    }
}
