<?php

namespace App\Http\Actions\Company;

use App\Http\Responders\Company\ShowResponder;
use App\Models\Company;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class ShowAction extends Controller
{
    public function __construct(
        private ShowResponder $responder)
    {
    }

    public function __invoke(Company $company): Response
    {
        return $this->responder->handle($company);
    }
}
