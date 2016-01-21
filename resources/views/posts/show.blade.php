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


            <!-- コメント表示欄 -->
            <h2 class="page-header">コメント</h2>
            <div>
                @foreach($comments as $comment)
                  <div class="text-center col-xs-12">{{{ $comment->comment }}}</div>
                @endforeach
            </div>
            <div class="">
                <form action="../../comments/create" method="post" accept-charset="utf-8">
                    {{ csrf_field() }}
                    <textarea name="comment" placeholder="コメントする" class="form-control require"></textarea><br>
                    <input type="submit" value="送信する"></input>
                </form>
            </div>
            <a href="../index">戻る</a>
        </div>


    </div>
@endsection
