@extends('layouts/app')

@section('content')

    <!-- シンタックスハイライト -->
    <link rel="stylesheet" href="../../../resources/assets/prism.css" />
    <script src="../../../resources/assets/prism.js"></script>
    <div class="container">
        <div class="col-sm-12">
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
                    <td><pre><code class="language-php">{{{ $post->code }}}</code></pre></td>
                </tr>
                </tbody>
            </table>
            <a href="../index">戻る</a>
        </div>
    </div>
@endsection
