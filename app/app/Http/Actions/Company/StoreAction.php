//
//namespace App\Http\Actions\Company;
//
//use Illuminate\Http\Request;
//use App\Http\Responders\Company\StoreResponder;
//use App\Usecase\Company\StoreUsecase;
//use Illuminate\Routing\Controller;
//use Symfony\Component\HttpFoundation\Response;
//
//class StoreAction extends Controller
//{
//    public function __construct(
//        private StoreUsecase $usecase,
//        private StoreResponder $responder)
//    {
//    }
//
//    public function __invoke(Request $request): Response
//    {
//        return $this->responder->handle($this->usecase->run($request));
//    }
//}
