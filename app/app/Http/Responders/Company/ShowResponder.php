<?php

declare(strict_types=1);

namespace App\Http\Responders\Company;

use App\Models\Company;
use Illuminate\Routing\ResponseFactory;
use Symfony\Component\HttpFoundation\Response;

class ShowResponder
{
    public function __construct(
        private ResponseFactory $responseFactory
    )
    {
    }

    public function handle(Company $company): Response
    {
        return $this->responseFactory->view('companies.show', compact('company'));
    }
}
