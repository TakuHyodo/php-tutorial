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
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">会社名</th>
            <th scope="col">住所</th>
            <th scope="col">資本金</th>
            <th scope="col">メモ</th>
            <th scope="col">操作</th>
            <th scope="col">削除</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>会社名</td>
            <td>住所</td>
            <td>資本金</td>
            <td>メモ</td>
            <td>操作</td>
            <td>削除</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>会社名</td>
            <td>住所</td>
            <td>資本金</td>
            <td>メモ</td>
            <td>操作</td>
            <td>削除</td>
        </tr>
        <tr>
            <td>会社名</td>
            <td>住所</td>
            <td>資本金</td>
            <td>メモ</td>
            <td>操作</td>
            <td>削除</td>
        </tr>
        </tbody>
    </table>
</main>

</body>
</html>
