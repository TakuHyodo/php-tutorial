@extends('app')

@section('main')
    <main class="container">
        <h2 class="p-2">車詳細</h2>

        <div class="row p-2">
            <div class="col-3">車名<span class="badge bg-danger">必須</span></div>
            <div class="col-8">{{ $car->name }}</div>
        </div>

        <div class="row p-2">
            <div class="col-3">排気量<span class="badge bg-danger">必須</span></div>
            <div class="col-4">{{ $car->cc }}</div>
            <div class="col-5">cc</div>
        </div>

        //追加
        <div class="row p-2">
            <div class="col-3">販売会社<span class="badge bg-danger">必須</span></div>
            <div class="col-6">
                {{ Form::select('company_id', $companies, $car->company_id, ['class' => 'form-select', 'placeholder' => '選択してください']) }}
            </div>
        </div>

        <div class="row p-2">
            <div class="col-3">発売日<span class="badge bg-danger">必須</span></div>
            <div class="col-4">{{ $car->sale_date }}</div>
        </div>
        <div class="row p-2">
            <div class="col-3">メモ</div>
            <div class="col-4">{{ $car->memo }}</div>
        </div>
        <div class="row p-2">
            <div class="col-3">画像</div>
            <div class="col-4"><img src="{{ $car->image_url }}"></div>
        </div>
        <div class="d-grid mt-2 col-4 mx-auto">
            <a class="btn btn-primary">編集</a>
            {{ link_to_route('cars.edit', '編集', ['car' => $car->id], ['class' => 'btn btn-primary']) }}
        </div>

    </main>
@endsection
