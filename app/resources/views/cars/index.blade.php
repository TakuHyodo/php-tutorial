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
    <h2 class="p-2">検索</h2>
    {{ Form::open(['route' => 'cars.index', 'method' => 'GET']) }}
    <div class="row p-2">
        <div class="col-3">車名</div>
        <div class="col-8">{{ Form::text('name', Request::get('name'), ['class' => 'form-control']) }}</div>
    </div>

    <div class="row p-2">
        <div class="col-3">排気量</div>
        <div class="col-4">{{ Form::number('cc', Request::get('cc'), ['class' => 'form-control']) }}</div>
        <div class="col-5">cc</div>
    </div>

    <div class="row p-2">
        <div class="col-3">発売日</div>
        <div class="col-4">{{ Form::date('date_from', Request::get('date_from'), ['class' => 'form-control']) }}</div>
        <div class="col-1">~</div>
        <div class="col-4">{{ Form::date('date_to', Request::get('date_to'), ['class' => 'form-control']) }}</div>
    </div>
    <div class="d-grid col-4 mx-auto">
        {{ Form::submit('検索', ['class' => 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}
    <h2 class="p-2">一覧</h2>
    <table class="table">
        </thead>

        {{-- ここから下が変更箇所 --}}
        <tbody>
        @foreach($cars as $car)
            <tr>
                <th scope="row">{{ $car->id }}</th>
                <td>{{ $car->name }}</td>
                <td>{{ $car->cc }}</td>
                <td>{{ $car->company_id }}</td>
                <td>{{ $car->sale_date }}</td>
                <td>操作</td>
                <td>削除</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $cars->appends(request()->query())->links() }}
</main>

</body>
</html>
