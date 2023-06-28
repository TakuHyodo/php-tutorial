@extends('app')

@section('main')
<main class="container">
    <h2 class="p-2">会社詳細</h2>

    <div class="row p-2">
        <div class="col-3">会社名<span class="badge bg-danger">必須</span></div>
        <div class="col-8">{{ $company->company_name }}</div>
    </div>

    <div class="row p-2">
        <div class="col-3">住所<span class="badge bg-danger">必須</span></div>
        <div class="col-4">{{ $company->prefecture_id }}</div>
    </div>

    <div class="row p-2">
        <div class="col-3">メモ</div>
        <div class="col-4">{{ $company->memo }}</div>
    </div>
    <div class="row p-2">
        <div class="col-3">画像</div>
        <div class="col-4"><img src="{{ $company->image_url }}"></div>
    </div>
    <div class="d-grid mt-2 col-4 mx-auto">
        {{ link_to_route('companies.edit', '編集', ['company' => $company->company_id], ['class' => 'btn btn-primary']) }}
    </div>

</main>
@endsection
