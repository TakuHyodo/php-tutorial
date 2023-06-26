<?php
//
//namespace App\Usecase\Company;
//
//use App\Http\Payload;
//use Illuminate\Http\Request;
//use App\Models\;
//
//class StoreUsecase
//{
//    public function run(Request $request): Payload
//    {
//        $car = new Car();
//
//        $car->fill([
//            'name' => $request->get('name'),
//            'cc' => $request->get('cc'),
//            'sale_date' => $request->get('date'),
//            'memo' => $request->get('memo'),
//        ]);
//
//        $car->save();
//
//        return (new Payload())
//            ->setStatus(Payload::SUCCEED);
//    }
//}
