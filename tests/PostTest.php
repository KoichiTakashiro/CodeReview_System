<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostTest extends TestCase
{
    // アクセスした際の表示周りのテスト
    public function testAccess()
    {
        $this->visit('codereview/public/posts')
               ->see('会員登録') // app.blade.php(レイアウトファイル)が表示されているか
               ->see('新着コード') // index.blade.phpが表示されているか
               ->see('困った') // データベースに登録してあるデータが表示されているか
               ->click('会員登録') // 会員登録ボタンを押下
               ->seePageIs('/auth/register'); // 会員登録ボタンを押下した際の遷移先が正しいか
    }

}
