@extends('app')

@section('main')
    <main class="container">
        @if (!empty($errors->all()))
            <div class="mt-2 alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif

        <h2 class="p-2">会社更新</h2>
            {{ Form::open([
        'route' => ['companies.update', $company->company_id],
        'method' => 'post',
        'files' => true
        ]) }}
            <div class="row p-2">
                <div class="col-3">会社名<span class="badge bg-danger">必須</span></div>
                <div class="col-8">{{ Form::text('company_name', $company->company_name, ['class' => 'form-control']) }}</div>
            </div>

            <div class="row p-2">
                <div class="col-3">住所<span class="badge bg-danger">必須</span></div>
                <div class="col-4">{{ Form::textarea('prefecture_id', $company->prefecture_id, ['class' => 'form-control']) }}</div>
            </div>

            <div class="row p-2">
                <div class="col-3">メモ</div>
                <div class="col-4">{{ Form::textarea('memo', $company->memo, ['class' => 'form-control']) }}</div>
            </div>
            <div class="row p-2">
                <div class="col-3">画像</div>
                <div class="col-4"><img src="{{ $company->image_url }}"></div>
            </div>

        <div class="d-grid mt-2 col-4 mx-auto">
            {{ Form::submit('更新', ['class' => 'btn btn-primary']) }}
        </div>
        {{ Form::close() }}

    </main>
@endsection
