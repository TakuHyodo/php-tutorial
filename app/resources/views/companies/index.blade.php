@extends('app')

@section('main')

<main class="container">
    @if (session('succeed_status'))
        <div class="mt-2 alert alert-success">
            {{ session('succeed_status') }}
        </div>
    @endif

    @if (session('failed_status'))
        <div class="mt-2 alert alert-danger">
            {{ session('failed_status') }}
        </div>
    @endif
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

    <div class="d-grid col-2 ms-auto">
        {{ link_to_route('companies.create', '新規登録', null, ['class' => 'btn btn-primary']) }}
    </div>
    <h2 class="p-2">一覧</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">会社ID</th>
            <th scope="col">会社名</th>
            <th scope="col">住所</th>
            <th scope="col">編集</th>
            <th scope="col">削除</th>
        </tr>
        </thead>

        {{-- ここから下が変更箇所 --}}
        <tbody>
        @foreach($companies as $company)
            <tr>
                <th scope="row">
                    {{ link_to_route('companies.show', $company->company_id, ['company' => $company->company_id]) }}
                </th>
                <td>{{ $company->company_name }}</td>
                <td>{{ $company->prefecture_id }}</td>
                <td>{{ link_to_route('companies.edit', '編集', ['company' => $company->company_id], ['class' => 'btn btn-primary']) }}</td>
                <td>削除</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $companies->appends(request()->query())->links() }}
</main>
@endsection
