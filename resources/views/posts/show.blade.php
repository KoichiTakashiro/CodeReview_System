@extends('layouts/app')

@section('content')
    <h2 class="page-header">質問詳細</h2>
    <table class="table table-striped">
        <tbody>
        <tr>
            <th>タイトル</th>
            <td>{{{ $post->title }}}</td>
        </tr>
        <tr>
            <th>本文</th>
            <td>{{{ $post->message }}}</td>
        </tr>
        <tr>
            <th>コード</th>
            <td>{{{ $post->code }}}</td>
        </tr>
        </tbody>
    </table>
    <a href="../index">戻る</a>
@endsection
