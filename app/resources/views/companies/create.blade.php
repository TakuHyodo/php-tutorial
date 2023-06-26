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

    <h2 class="p-2">会社登録</h2>
        {{ Form::open([
        'route' => 'companies.store',
        'method' => 'post',
        'files' => true //追加
    ]) }}
    <div class="row p-2">
        <div class="col-3">会社名</div>
        <div class="col-8">{{ Form::text('company_name', Request::get('company_name'), ['class' => 'form-control']) }}</div>
    </div>

    <div class="row p-2">
        <div class="col-3">住所</div>
        <div class="col-4">{{ Form::text('prefecture_id', Request::get('prefecture_id'), ['class' => 'form-control']) }}</div>
    </div>
    <div class="row p-2">
        <div class="col-3">メモ</div>
        <div class="col-4">{{ Form::textarea('memo', Request::get('memo'), ['class' => 'form-control']) }}</div>
    </div>

        <div class="row p-2">
            <div class="col-3">画像</div>
            <div class="col-4">{{ Form::file('image', ['class' => 'form-control']) }}</div>
        </div>

    <div class="d-grid mt-2 col-4 mx-auto">
        {{ Form::submit('保存', ['class' => 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}

</main>
@endsection
