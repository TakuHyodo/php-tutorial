<?php

namespace App\Http\Actions\Company;

use App\Http\Responders\Company\CreateResponder;
use App\Usecase\Company\CreateUsecase;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class CreateAction extends Controller
{
    public function __construct(
        private CreateUsecase $usecase,
        private CreateResponder $responder)
    {
    }

    public function __invoke(): Response
    {
        return $this->responder->handle($this->usecase->run());
    }
}
