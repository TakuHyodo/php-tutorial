<?php


namespace App\Usecase\Company;

use App\Http\Payload;
use App\Models\Company;

class DeleteUsecase
{
    public function run(Company $company): Payload
    {
        try {
            \DB::beginTransaction();
            $company->delete();

            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollBack();

            return (new Payload())
                ->setStatus(Payload::FAILED);
        }

        return (new Payload())
            ->setStatus(Payload::SUCCEED);
    }
}

