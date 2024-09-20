@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/result.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <h1 class="result__title">あなたにおすすめの趣味</h1>
        <div class="result__item">
            <div class="item__group">
                <div class="item__ttl">
                    <p class="item__ttl-title">最もおすすめの趣味</p>
                </div>
                <div class="item__about">
                    <p class="item__about-title">{{ $mostRecommendedHobby }}</p>
                </div>
            </div>
            <div class="item__group">
                <div class="item__ttl">
                    <p class="item__ttl-title">その他おすすめの趣味</p>
                </div>
                <div class="item__list">
                @if (count($otherRecommendedHobbies) > 0)
                    <ul class="item__list-ttl">
                        @foreach ($otherRecommendedHobbies as $hobby)
                            <li class="item__list-title">{{ $hobby['name'] }}</li>
                        @endforeach
                    </ul>
                @else
                    <p class="item__list-ttl">おすすめの趣味はありません。</p>
                @endif
                </div>
            </div>
            <div class="button">
                <form action="{{ route('quiz.saveHobbies') }}" method="post">
                    @csrf
                    <input type="hidden" name="mostRecommendedHobby" value="{{ $mostRecommendedHobby }}">
                    @foreach ($otherRecommendedHobbies as $index => $hobby)
                        <input type="hidden" name="otherRecommendedHobbies[]" value="{{ $hobby['name'] }}">
                    @endforeach
                    <button type="submit" class="button__ttl">保存</button>
                </form>
                <span class="span">|</span>
                <a href="{{ route('quiz.index') }}" class="back__link">ホーム</a>
            </div>
        </div>
    </div>
@endsection