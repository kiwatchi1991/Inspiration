@extends('layouts.app')
@include('layouts.header')
@include('layouts.footer')
@section('title','トップページ')
@section('description','そのアイデア、形にしませんか？「Webサービスのアイデアはあるけど、実装スキルがない」「実装スキルはあるけど、サービスのアイデアはない」Webサービスアイデア販売プラットフォーム　Inspiration')
@section('content')

{{-- fvセクション --}}
<div class="l-color__white">
    <section class="p-top__fv l-container">
        <div class="p-top__fv__topHalf">
            <div class="p-top__fv__img">
                <img src="images/top_fv.svg" alt="fv画像">
            </div>
            <div class="p-top__fv__textWrap">
                <div class="p-top__fv__title">
                    <h3 class="p-top__fv__title__text">そのアイデア、<br>形にしませんか？</h3>
                </div>
                <div class="p-top__fv__sub">
                    <div class="p-top__fv__subText p-top__fv__subText--idea">「Webサービスのアイデアはあるけど、実装スキルがない」</div>
                    <div class="p-top__fv__subText p-top__fv__subText--skill">「実装スキルはあるけど、サービスのアイデアはない」</div>
                </div>
            </div>
        </div>
        <div class="p-top__fv__bottomHalf">
            <h2>Webサービス<br class="sp_only">アイデア販売プラットフォーム</h2>
        </div>
        <div class="p-top__fv__toIdea">
            <a href="{{ route('ideas.index') }}" class="c-button__link">アイデアを見る</a>
        </div>
    </section>

    {{-- Inspirationとは セクション --}}
    <section class="p-top__about">
        <div class="p-top__about__inner l-container">
            <div class="p-top__about__title">
                <h2>Inspirationとは？</h2>
            </div>
            <div class="p-top__about__despriction">
                <p class="p-top__about__despriction__text">作りたいwebサービスのアイデアがあるのに、実装スキルがないという方は多くいます。</p>
                <p class="p-top__about__despriction__text">そんな「形になっていないアイデア」を、実装スキルを持つ人に販売することができます。</p>
                <p class="p-top__about__despriction__text">これまで温めていたあなたのサービスアイデアをInspirationで販売しましょう！</p>
            </div>
            <div class="p-top__about__contents">
                <div class="p-top__about__content p-top__about__content--idea">
                    <h3 class="p-top__about__content__title">idea</h3>
                    <div class="p-top__about__content__text">
                        Webサービスのアイデアを<br>
                        売ることができます
                    </div>
                    <div class="p-top__about__content__img">
                        <img src="images/top_idea.svg" alt="idea画像">
                    </div>

                </div>
                <div class="p-top__about__content p-top__about__content--skill">
                    <h3 class="p-top__about__content__title">skill</h3>
                    <div class="p-top__about__content__text">
                        実装スキルがある人は、<br>
                        アイデアを買うことができます
                    </div>
                    <div class="p-top__about__content__img p-top__about__content__img--skill">
                        <img src="images/top_skill.svg" alt="skill画像">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Step セクション --}}
    <section class="p-top__step">
        <div class="p-top__step__inner l-container">
            <div class="p-top__step__title">
                <h2>Step</h2>
            </div>
            <div class="p-top__step__subTitle">
                <p>３ステップでかんたんスタート！</p>
            </div>
            <div class="p-top__step__items">
                <div class="p-top__step__item p-top__step__item--step1">

                    <div class="p-top__step__item__count">
                        01.
                    </div>
                    <div class="p-top__step__item__img">
                        <img src="images/step1.svg" alt="">
                    </div>
                    <div class="p-top__step__item__title">
                        新規登録
                    </div>
                </div>
                <div class="p-top__step__item p-top__step__item--step1">

                    <div class="p-top__step__item__count">
                        02.
                    </div>
                    <div class="p-top__step__item__img">
                        <img src="images/step2.svg" alt="">
                    </div>
                    <div class="p-top__step__item__title">
                        ログイン
                    </div>
                </div>
                <div class="p-top__step__item p-top__step__item--step1">

                    <div class="p-top__step__item__count">
                        03.
                    </div>
                    <div class="p-top__step__item__img">
                        <img src="images/step3.svg" alt="">
                    </div>
                    <div class="p-top__step__item__title">
                        アイデアを<br>投稿しよう
                    </div>
                </div>
            </div>
            <div class="p-top__step__toRegister">
                <a href="" class="c-button__link">新規会員登録</a>
            </div>
        </div>
    </section>
    <section class="p-top__end">
        <div class="p-top__end__inner">
            <div class="p-top__end__toIdeas">
                <a href="" class="c-button__link">今すぐ始める</a>
            </div>
        </div>
    </section>
</div>
@endsection