<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobbiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobbies')->insert([
            ['name' => 'ハイキング', 'question_1' => 'outdoor', 'question_2' => 'fun', 'question_3' => 'nature'],
            ['name' => 'キャンプ', 'question_1' => 'outdoor', 'question_2' => 'fun', 'question_3' => 'home'],
            ['name' => '街歩き', 'question_1' => 'outdoor', 'question_2' => 'fun', 'question_3' => 'cafe'],
            ['name' => 'アート散策', 'question_1' => 'outdoor', 'question_2' => 'fun', 'question_3' => 'art_studio'],
            ['name' => '山登り', 'question_1' => 'outdoor', 'question_2' => 'challenge', 'question_3' => 'nature'],
            ['name' => 'サイクリング', 'question_1' => 'outdoor', 'question_2' => 'challenge', 'question_3' => 'home'],
            ['name' => '都会探検', 'question_1' => 'outdoor', 'question_2' => 'challenge', 'question_3' => 'cafe'],
            ['name' => 'アートワークショップ', 'question_1' => 'outdoor', 'question_2' => 'challenge', 'question_3' => 'art_studio'],
            ['name' => '野生動物観察', 'question_1' => 'outdoor', 'question_2' => 'learning', 'question_3' => 'nature'],
            ['name' => '農業体験', 'question_1' => 'outdoor', 'question_2' => 'learning', 'question_3' => 'home'],
            ['name' => '街の歴史探訪', 'question_1' => 'outdoor', 'question_2' => 'learning', 'question_3' => 'cafe'],
            ['name' => '美術館巡り', 'question_1' => 'outdoor', 'question_2' => 'learning', 'question_3' => 'art_studio'],
            ['name' => '野外フェス', 'question_1' => 'outdoor', 'question_2' => 'social', 'question_3' => 'nature'],
            ['name' => 'BBQパーティー', 'question_1' => 'outdoor', 'question_2' => 'social', 'question_3' => 'home'],
            ['name' => '街コン', 'question_1' => 'outdoor', 'question_2' => 'social', 'question_3' => 'cafe'],
            ['name' => 'アートイベント', 'question_1' => 'outdoor', 'question_2' => 'social', 'question_3' => 'art_studio'],
            ['name' => '読書会', 'question_1' => 'reading', 'question_2' => 'fun', 'question_3' => 'nature'],
            ['name' => '自宅での読書', 'question_1' => 'reading', 'question_2' => 'fun', 'question_3' => 'home'],
            ['name' => 'カフェでの読書', 'question_1' => 'reading', 'question_2' => 'fun', 'question_3' => 'cafe'],
            ['name' => 'アートブックの鑑賞', 'question_1' => 'reading', 'question_2' => 'fun', 'question_3' => 'art_studio'],
            ['name' => '文学研究', 'question_1' => 'reading', 'question_2' => 'challenge', 'question_3' => 'nature'],
            ['name' => '詩の執筆', 'question_1' => 'reading', 'question_2' => 'challenge', 'question_3' => 'home'],
            ['name' => '評論文の執筆', 'question_1' => 'reading', 'question_2' => 'challenge', 'question_3' => 'cafe'],
            ['name' => 'アート評論', 'question_1' => 'reading', 'question_2' => 'challenge', 'question_3' => 'art_studio'],
            ['name' => '歴史小説の読書', 'question_1' => 'reading', 'question_2' => 'learning', 'question_3' => 'nature'],
            ['name' => '哲学書の読書', 'question_1' => 'reading', 'question_2' => 'learning', 'question_3' => 'home'],
            ['name' => 'カフェでの研究', 'question_1' => 'reading', 'question_2' => 'learning', 'question_3' => 'cafe'],
            ['name' => 'アートに関する読書', 'question_1' => 'reading', 'question_2' => 'learning', 'question_3' => 'art_studio'],
            ['name' => '文学サロン', 'question_1' => 'reading', 'question_2' => 'social', 'question_3' => 'nature'],
            ['name' => 'ホームブッククラブ', 'question_1' => 'reading', 'question_2' => 'social', 'question_3' => 'home'],
            ['name' => 'カフェでの読書会', 'question_1' => 'reading', 'question_2' => 'social', 'question_3' => 'cafe'],
            ['name' => 'アート関連の読書会', 'question_1' => 'reading', 'question_2' => 'social', 'question_3' => 'art_studio'],
            ['name' => '料理教室', 'question_1' => 'cooking', 'question_2' => 'fun', 'question_3' => 'nature'],
            ['name' => '家庭料理', 'question_1' => 'cooking', 'question_2' => 'fun', 'question_3' => 'home'],
            ['name' => 'カフェレシピ挑戦', 'question_1' => 'cooking', 'question_2' => 'fun', 'question_3' => 'cafe'],
            ['name' => '食に関するアート', 'question_1' => 'cooking', 'question_2' => 'fun', 'question_3' => 'art_studio'],
            ['name' => 'レシピ開発', 'question_1' => 'cooking', 'question_2' => 'challenge', 'question_3' => 'nature'],
            ['name' => 'デザート作り', 'question_1' => 'cooking', 'question_2' => 'challenge', 'question_3' => 'home'],
            ['name' => 'カフェメニューの開発', 'question_1' => 'cooking', 'question_2' => 'challenge', 'question_3' => 'cafe'],
            ['name' => 'アート的な料理', 'question_1' => 'cooking', 'question_2' => 'challenge', 'question_3' => 'art_studio'],
            ['name' => 'フードツアー', 'question_1' => 'cooking', 'question_2' => 'learning', 'question_3' => 'nature'],
            ['name' => '自宅での調理実験', 'question_1' => 'cooking', 'question_2' => 'learning', 'question_3' => 'home'],
            ['name' => 'カフェ巡り', 'question_1' => 'cooking', 'question_2' => 'learning', 'question_3' => 'cafe'],
            ['name' => 'フードアート', 'question_1' => 'cooking', 'question_2' => 'learning', 'question_3' => 'art_studio'],
            ['name' => '料理パーティー', 'question_1' => 'cooking', 'question_2' => 'social', 'question_3' => 'nature'],
            ['name' => 'ホームパーティー', 'question_1' => 'cooking', 'question_2' => 'social', 'question_3' => 'home'],
            ['name' => 'カフェでの料理イベント', 'question_1' => 'cooking', 'question_2' => 'social', 'question_3' => 'cafe'],
            ['name' => 'アートキッチン', 'question_1' => 'cooking', 'question_2' => 'social', 'question_3' => 'art_studio'],
            ['name' => 'ゲーム大会', 'question_1' => 'gaming', 'question_2' => 'fun', 'question_3' => 'nature'],
            ['name' => 'ホームゲーム', 'question_1' => 'gaming', 'question_2' => 'fun', 'question_3' => 'home'],
            ['name' => 'カフェでのゲーム', 'question_1' => 'gaming', 'question_2' => 'fun', 'question_3' => 'cafe'],
            ['name' => 'アート関連のゲーム', 'question_1' => 'gaming', 'question_2' => 'fun', 'question_3' => 'art_studio']
        ]);
    }
}
