<?php

declare(strict_types=1);

namespace App\Http\Responders\Company;

use App\Http\Payload;
use Illuminate\Routing\ResponseFactory;
use Symfony\Component\HttpFoundation\Response;

class UpdateResponder
{
    public function __construct(
        private ResponseFactory $responseFactory
    )
    {
    }

    public function handle(Payload $payload): Response
    {
        if ($payload->getStatus() === Payload::FAILED) {
            return $this->responseFactory->redirectToRoute('companies.index')->with('failed_status', '更新に失敗しました。');
        }
        return $this->responseFactory->redirectToRoute('companies.index')->with('succeed_status', '更新が完了しました。');
    }

}
