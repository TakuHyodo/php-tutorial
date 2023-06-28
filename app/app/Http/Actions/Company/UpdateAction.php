<?php

namespace App\Http\Actions\Company;

use App\Http\Requests\Company\UpdateRequest;
use App\Http\Responders\Company\UpdateResponder;
use App\Models\Company;
use App\Usecase\Company\UpdateUsecase;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class UpdateAction extends Controller
{
    public function __construct(
        private UpdateUsecase $usecase,
        private UpdateResponder $responder)
    {
    }

    public function __invoke(UpdateRequest $request, Company $company): Response
    {
        return $this->responder->handle($this->usecase->run($request, $company));
    }
}
