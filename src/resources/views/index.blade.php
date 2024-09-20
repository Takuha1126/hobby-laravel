@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
@endsection

@section('content')
    <div class="main">
        <div class="main__ttl">
            <i class="fas fa-dragon"></i>
            <p class="main__title">質問にお答えください</p>
            <i class="fas fa-dragon"></i>
        </div>
        <div class="main__about">
            <form action="{{ route('quiz.process') }}" method="post">
                @csrf
                <div class="question">
                    <p class="question__title"><i class="fas fa-dragon"></i>週末に何をするのが好きですか？<i class="fas fa-dragon"></i></p>
                    <div class="options">
                        <label><input type="radio" name="question_1" value="outdoor">アウトドア活動</label>
                        <label><input type="radio" name="question_1" value="reading">読書</label>
                        <label><input type="radio" name="question_1" value="cooking">料理</label>
                        <label><input type="radio" name="question_1" value="gaming">ゲーム</label>
                    </div>
                </div>
                <div class="question">
                    <p class="question__title"><i class="fas fa-dragon"></i>新しいことを始めるときに重視するポイントは何ですか？<i class="fas fa-dragon"></i></p>
                    <div class="options">
                        <label><input type="radio" name="question_2" value="fun"> 楽しさ</label>
                        <label><input type="radio" name="question_2" value="challenge"> 挑戦</label>
                        <label><input type="radio" name="question_2" value="learning"> 学び</label>
                        <label><input type="radio" name="question_2" value="social"> 社交性</label>
                    </div>
                </div>
                <div class="question">
                    <p class="question__title"><i class="fas fa-dragon"></i>どのような環境でリラックスしますか？<i class="fas fa-dragon"></i></p>
                    <div class="options">
                        <label><input type="radio" name="question_3" value="nature"> 自然の中</label>
                        <label><input type="radio" name="question_3" value="home"> 家の中</label>
                        <label><input type="radio" name="question_3" value="cafe"> 都会のカフェ</label>
                        <label><input type="radio" name="question_3" value="art_studio"> アートスタジオ</label>
                    </div>
                </div>
                <div class="button">
                    <button type="submit" class="submit__button">結果を確認する</button>
                </div>
            </form>
        </div>
    </div>
@endsection