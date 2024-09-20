@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
@endsection

@section('content')
    <div class="main">
        <div class="main__ttl">
            <p class="main__title">Name</p>
            <p class="main__ttl-item">サンプルテキスト</p>
        </div>
        <div class="main__ttl">
            <p class="main__title">MostHobby</p>
            @if($save)
                <p class="main__ttl-item">{{$save->most_recommended_hobby}} </p>
            @else
                <p class="main__ttl-item">No hobbies saved</p>
            @endif
        </div>
        <div class="main__group">
            <div class="main__about">
                <div class="main__about-ttl">
                    <p class="main__about-title">recommendation</p>
                </div>
                <ol class="main__about-ol">
                    @if(!empty($otherRecommendedHobbies))
                        @foreach($otherRecommendedHobbies as $otherRecommendedHobby)
                            <li class="main__about-li">{{$otherRecommendedHobby}}</li>
                        @endforeach
                    @else
                        <li class="main__about-li">No recommendations available</li>
                    @endif
                </ol>
            </div>
            <div class="main__about">
                <div class="main__about-ttl">
                    <p class="main__about-title">popular</p>
                </div>
                <ol class="main__about-ol">
                    <li class="main__about-li"><a class="main__link">音楽鑑賞</a></li>
                    <li class="main__about-li"><a class="main__link">グルメ・食べ歩き</a></li>
                    <li class="main__about-li"><a class="main__link">アニメ</a></li>
                </ol>
            </div>
        </div>
    </div>
@endsection

