<?php

namespace App\Http\Actions\Company;

use App\Http\Requests\Company\StoreRequest; // 追加
use App\Http\Responders\Company\StoreResponder;
use App\Usecase\Company\StoreUsecase;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class StoreAction extends Controller
{
    public function __construct(
        private StoreUsecase $usecase,
        private StoreResponder $responder)
    {
    }

    public function __invoke(StoreRequest $request): Response
    {
        return $this->responder->handle($this->usecase->run($request));
    }
}
