<?php

namespace App\Http\Actions\Company;

use App\Http\Responders\Company\IndexResponder;
use App\Usecase\Company\IndexUsecase;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
class IndexAction extends Controller
{
    public function __construct(
        private IndexUsecase $usecase,
        private IndexResponder $responder
    ){
    }

    public function __invoke(Request $request): Response
    {
        return $this->responder->handle($this->usecase->run($request));
    }

}
