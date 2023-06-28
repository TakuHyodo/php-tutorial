<?php

namespace App\Http\Actions\Company;

use App\Http\Responders\Company\EditResponder;
use App\Models\Company;
use App\Usecase\Company\EditUsecase;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class EditAction extends Controller
{
    public function __construct(
        private EditUsecase $usecase,
        private EditResponder $responder)
    {
    }

    public function __invoke(Company $company): Response
    {
        return $this->responder->handle($this->usecase->run($company));
    }
}
