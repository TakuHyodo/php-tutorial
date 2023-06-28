<?php


namespace App\Usecase\Company;

use App\Http\Payload;
use App\Http\Requests\Company\UpdateRequest;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;

class UpdateUsecase
{
    public function run(UpdateRequest $request, Company $company): Payload
    {
        try {
            \DB::beginTransaction();
            $imageUrl = $this->updateImage($request, $company);
            $company->update([
                'company_name' => $request->get('company_name'),
                'prefecture_id' => $request->get('prefecture_id'),
                'memo' => $request->get('memo'),
                'image_url' => $imageUrl
            ]);
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollBack();
            return (new Payload())
                ->setStatus(Payload::FAILED);
        }
        return (new Payload())
            ->setStatus(Payload::SUCCEED);
    }

    private function updateImage(UpdateRequest $request, Company $company): string|null
    {
        if ($request->file('image') === null) {
            return $company->image_url;
        }

        $storage = Storage::disk('public');
        $storage->delete('/image/' . pathinfo($company->image_url, PATHINFO_BASENAME));
        $imageUrl = $storage->putFile('/image', $request->file('image'));

        return $storage->url($imageUrl);
    }
}
