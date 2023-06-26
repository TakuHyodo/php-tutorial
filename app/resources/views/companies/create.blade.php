<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>車カタログ</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body class="bg_cl_gr">

<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                車カタログ
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-secondary">車</a></li>
                <li><a href="#" class="nav-link px-2 text-white">会社</a></li>
            </ul>

            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">ログアウト</button>
            </div>
        </div>
    </div>
</header>

<main class="container">
    @if (!empty($errors->all()))
        <div class="mt-2 alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif

    <h2 class="p-2">会社登録</h2>

    {{ Form::open() }}
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

    <div class="d-grid mt-2 col-4 mx-auto">
        {{ Form::submit('保存', ['class' => 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}

</main>

</body>
</html>
