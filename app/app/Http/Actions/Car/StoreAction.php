<?php

namespace App\Http\Actions\Car;

use App\Http\Requests\Car\StoreRequest; // 追加
use App\Http\Responders\Car\StoreResponder;
use App\Usecase\Car\StoreUsecase;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class StoreAction extends Controller
{
    public function __construct(
        private StoreUsecase $usecase,
        private StoreResponder $responder)
    {
    }

    public function __invoke(StoreRequest $request): Response //変更
    {
        return $this->responder->handle($this->usecase->run($request));
    }
}
