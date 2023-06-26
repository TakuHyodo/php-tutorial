<?php

namespace App\Usecase\Company;

use App\Http\Payload;
use App\Http\Requests\Company\StoreRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Company;

class StoreUsecase
{
    public function run(StoreRequest $request): Payload
    {
        try {
            \DB::beginTransaction();
            $imageUrl = $this->uploadImage($request);
            $Company = new Company();

            $Company->fill([
                'company_name' => $request->get('company_name'),
                'prefecture_id' => $request->get('prefecture_id'),
                'memo' => $request->get('memo'),
                'image_url' => $imageUrl // 追加
            ]);

            $Company->save();
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollBack();
            \Log::error($e);

            return (new Payload())
                ->setStatus(Payload::FAILED);
        }

        return (new Payload())
            ->setStatus(Payload::SUCCEED);

    }
    // 追加
    private function uploadImage(StoreRequest $request): string
    {
        if ($request->file('image') === null) {
            return '';
        }

        $storage = Storage::disk('public');
        $path = $storage->putFile('/image', $request->file('image'));

        return $storage->url($path);
    }
}
