<?php
namespace App\Usecase\Company;

use App\Http\Payload;
use App\Models\Company;

class IndexUsecase
{
    public function run($request): Payload
    {
        $query = Company::query();

        if ($request->get('company_name') !== null) {
            $query->where('company_name', 'like', "%{$request->get('company_name')}%");
        }

        if ($request->get('prefecture_id') !== null) {
            $query->where('prefecture_id', 'like', "%{$request->get('prefecture_id')}%");
        }

        $companies = $query->paginate(10);

        return (new Payload())
            ->setStatus(Payload::SUCCEED)
            ->setOutput(compact('companies'));
    }

}
