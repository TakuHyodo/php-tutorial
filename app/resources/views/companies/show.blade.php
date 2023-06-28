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
        <div class="col-5">cc</div>
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
        <a class="btn btn-primary">編集</a>
    </div>

</main>
@endsection
