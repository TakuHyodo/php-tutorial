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
                <li><a href="#" class="nav-link px-2 text-white">車</a></li>
                <li><a href="#" class="nav-link px-2 text-secondary">会社</a></li>
            </ul>

            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">ログアウト</button>
            </div>
        </div>
    </div>
</header>

<main class="container">
    <h2 class="p-2">検索</h2>

    {{ Form::open(['route' => 'companies.index', 'method' => 'GET']) }}
    <div class="row p-2">
        <div class="col-3">社名</div>
        <div class="col-8">{{ Form::text('company_name', Request::get('company_name'), ['class' => 'form-control']) }}</div>
    </div>

    <div class="row p-2">
        <div class="col-3">住所</div>
        <div class="col-4">{{ Form::text('prefecture_id', Request::get('prefecture_id'), ['class' => 'form-control']) }}</div>
    </div>

    <div class="d-grid col-4 mx-auto">
        {{ Form::submit('検索', ['class' => 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}

    <h2 class="p-2">一覧</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">会社ID</th>
            <th scope="col">会社名</th>
            <th scope="col">住所</th>
            <th scope="col">操作</th>
            <th scope="col">削除</th>
        </tr>
        </thead>

        {{-- ここから下が変更箇所 --}}
        <tbody>
        @foreach($companies as $company)
            <tr>
                <th scope="row">{{ $company->company_id }}</th>
                <td>{{ $company->company_name }}</td>
                <td>{{ $company->prefecture_id }}</td>
                <td>操作</td>
                <td>削除</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $companies->appends(request()->query())->links() }}
</main>

</body>
</html>
