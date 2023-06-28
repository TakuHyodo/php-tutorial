<?php

namespace App\Http\Actions\Company;

use App\Http\Responders\Company\DeleteResponder;
use App\Models\Company;
use App\Usecase\Company\DeleteUsecase;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class DeleteAction extends Controller
{
    public function __construct(
        private DeleteUsecase $usecase,
        private DeleteResponder $responder)
    {
    }

    public function __invoke(Company $company): Response
    {
        return $this->responder->handle($this->usecase->run($company));
    }
}
