<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>All in one Sucheduler | 仕事もプライベートも一元管理</title>

        <!-- Styles -->
        <link rel="stylesheet" href="./assets/css/app.css">
    </head>
    <body>
        <header class="l-header">
            <div class="l-header__inner">
                <div class="l-header__left">
                    <a href="/" class="l-header__logo">
                        <img src="assets/images/common/logo.png" alt="All in one Scheduler | 仕事もプライベートも一元管理" srcset="assets/images/common/logo@2x.png 2x">
                    </a>
                    <p class="l-header__desc">仕事もプライベートも一元管理</p>
                </div><!-- /.l-header__left -->
                <div class="l-header__right">
                    <div class="l-header__login">
                        <a href="/login" class="c-button-normal c-button-normal--small u-fw700">ログイン</a>
                    </div><!-- /.l-header__login -->
                </div><!-- /.l-header__right -->
            </div><!-- /.l-header__inner -->
        </header><!-- /.l-header -->

        <main class="l-body p-home">
            <div class="p-home-mv">
                <div class="c-container">
                    <div class="splide">
                        <div class="p-home-mv__slider splide__track">
                            <div class="p-home-mv__slider-list splide__list">
                                <div class="p-home-mv__slider-item splide__slide">
                                    <img src="assets/images/top/pic_about@2x.jpg" alt="カルーセルスライダー画像">
                                </div>
                                <div class="p-home-mv__slider-item splide__slide">
                                    <img src="assets/images/top/pic_about@2x.jpg" alt="カルーセルスライダー画像">
                                </div>
                                <div class="p-home-mv__slider-item splide__slide">
                                    <img src="assets/images/top/pic_about@2x.jpg" alt="カルーセルスライダー画像">
                                </div>
                                <div class="p-home-mv__slider-item splide__slide">
                                    <img src="assets/images/top/pic_about@2x.jpg" alt="カルーセルスライダー画像">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.c-container -->
            </div><!-- /.p-home-mv -->

            <div class="p-home-news">
                <div class="c-container">
                    <div class="p-home-news__inner">
                        <div class="p-section-title">
                            <span class="c-title-en">News</span>
                            <h2 class="c-title-ja">お知らせ</h2>
                        </div><!-- /.p-section-title -->
                        <div class="p-news-archives">
                            <div class="p-news-archives__item">
                                <span class="p-news-archives__date">2024年1月1日</span>
                                <a href="#" class="p-news-archives__category">リリース</a>
                                <a href="#" class="p-news-archives__title">アプリをリリース致しました。<br>ご要望・不具合等ございましたら、ページ下のお問い合わせフォームよりお気軽にご連絡くださいませ。</a>
                            </div><!-- /.p-news-archives__item -->
                            <div class="p-news-archives__item">
                                <span class="p-news-archives__date">2023年12月30日</span>
                                <a href="#" class="p-news-archives__category">お知らせ</a>
                                <a href="#" class="p-news-archives__title">【不具合改善】一部ユーザーがログインできない不具合を解消いたしました。</a>
                            </div><!-- /.p-news-archives__item -->
                            <div class="p-news-archives__item">
                                <span class="p-news-archives__date">2023年12月6日</span>
                                <a href="#" class="p-news-archives__category">お知らせ</a>
                                <a href="#" class="p-news-archives__title">【システムメンテナンス】2023年12月30日〜2024年1月1日までシステムメンテナンスを実施いたします。</a>
                            </div><!-- /.p-news-archives__item -->
                            <div class="p-news-archives__button">
                                <a href="/news" class="c-button-normal">お知らせ一覧へ</a>
                            </div><!-- /.p-news-archives__button -->
                        </div><!-- /.p-news-archives -->
                    </div><!-- /.p-home-news__inner -->
                </div><!-- /.c-container -->
            </div><!-- /.p-home-news -->

            <div class="p-home-about">
                <div class="c-container">
                    <div class="p-section-title">
                        <span class="c-title-en">About</span>
                        <h2 class="c-title-ja">All in one Schedulerについて</h2>
                    </div><!-- /.p-section-title -->
                    <div class="p-home-about__grid">
                        <div class="p-home-about__contents">
                            <p>
                                <span>仕事とプライベートのスケジュールを</span><span>一元管理できるWebアプリです。</span><br>
                                <br>
                                在宅ワークが普及してきた現在、<br>
                                <span>仕事とプライベートの</span><span>メリハリが付かない。</span><br>
                                <span>プライベートの時間に</span><span>仕事の事ばかり考えてしまう。など、</span><br>
                                <br>
                                <span>様々な悩みを抱えている方が</<span><span>多いと思います。</span><br>
                                <br>
                                <span>そういった悩みを抱えている</span><span>皆さまの手助けになるのが、</span><br>
                                「All in one Scheduler」です。
                            </p>
                            <div class="p-home-about__contents-button">
                                <a href="/login" class="c-button-normal">早速使ってみる</a>
                            </div><!-- /.p-home-about__contents-button -->
                        </div><!-- /.p-home-about__contents -->
                        <figure class="p-home-about__img">
                            <img src="assets/images/top/pic_about.jpg" alt="画像" srcset="assets/images/top/pic_about@2x.jpg 2x">
                        </figure><!-- /.p-home-about__img -->
                    </div><!-- /.p-home-about__grid -->
                </div><!-- /.c-container -->
            </div><!-- /.p-home-about -->

            <div class="p-home-features">
                <div class="c-container">
                    <div class="p-section-title">
                        <span class="c-title-en">Features</span>
                        <h2 class="c-title-ja">アプリの特徴</h2>
                    </div><!-- /.p-section-title -->
                    <div class="p-home-features__list">
                        <div class="p-home-features__item">
                            <div class="p-home-features__contents">
                                <h2 class="c-title-middle">マニュアルなしで<br>すぐに使い始められる<span class="u-color--accent">優れた操作性</span></h2>
                                <p class="p-home-features__contents-text">
                                    仕事とプライベートのスケジュールを一元管理できるWebアプリです。<br>
                                    <br>
                                    在宅ワークが普及してきた現在、<br>
                                    仕事とプレイベートのメリハリが付かない。<br>
                                    プレイベートの時間に仕事の事ばかり考えてしまう。<br>
                                    <br>
                                    そんな悩みを抱えている方が多いと思います。<br>
                                    <br>
                                    そういった皆さまの手助けになるのが、<br>
                                    「All in one Scheduler」です。
                                </p>
                            </div><!-- /.p-home-features__contents -->
                            <div class="p-home-features__img">
                                <img src="assets/images/top/img_feature01.jpg" alt="アプリの特徴その1" srcset="assets/images/top/img_feature01@2x.jpg 2x">
                            </div><!-- /.p-home-features__img -->
                        </div><!-- /.p-home-features__item -->
                        <div class="p-home-features__item">
                            <div class="p-home-features__contents">
                                <h2 class="c-title-middle">マニュアルなしで<br>すぐに使い始められる<span class="u-color--accent">優れた操作性</span></h2>
                                <p class="p-home-features__contents-text">
                                    仕事とプライベートのスケジュールを一元管理できるWebアプリです。<br>
                                    <br>
                                    在宅ワークが普及してきた現在、<br>
                                    仕事とプレイベートのメリハリが付かない。<br>
                                    プレイベートの時間に仕事の事ばかり考えてしまう。<br>
                                    <br>
                                    そんな悩みを抱えている方が多いと思います。<br>
                                    <br>
                                    そういった皆さまの手助けになるのが、<br>
                                    「All in one Scheduler」です。
                                </p>
                            </div><!-- /.p-home-features__contents -->
                            <div class="p-home-features__img">
                                <img src="assets/images/top/img_feature01.jpg" alt="アプリの特徴その1" srcset="assets/images/top/img_feature01@2x.jpg 2x">
                            </div><!-- /.p-home-features__img -->
                        </div><!-- /.p-home-features__item -->
                    </div><!-- /.p-home-features__list -->
                    <div class="p-home-features__button">
                        <a href="/login" class="c-button-normal">早速「All in one Scheduler」を使ってみる</a>
                    </div><!-- /.p-home-features__button -->
                </div><!-- /.c-container -->
            </div><!-- /.p-home-features -->

            <div class="p-home-contact">
                <div class="c-container">
                    <form class="p-contact-form">
                        <h2 class="c-title-normal u-tac">開発者に問い合わせる</h2>
                        <p class="p-contact-form__text">
                            本サービスに関するご要望・不具合等のご報告を受け付けております。<br>
                            より良いサービスの提供ができますよう、ご協力のほどよろしくお願い申し上げます。
                        </p>
                        <dl class="p-contact-form__item">
                            <dt class="p-contact-form__item-head">
                                <span class="title">お問い合わせの種類</span>
                                <span class="required">必須</span>
                            </dt><!-- /.p-contact-form__item-head -->
                            <dd class="p-contact-form__item-body">
                                <select name="" id="">
                                    <option value="">選択してください。</option>
                                    <option value="ご要望について">ご要望について</option>
                                    <option value="不具合のご報告について">不具合のご報告について</option>
                                    <option value="その他">その他</option>
                                </select>
                            </dd><!-- /.p-contact-form__item-body -->
                        </dl><!-- /.p-contact-form__item -->
                        <dl class="p-contact-form__item">
                            <dt class="p-contact-form__item-head">
                                <span class="title">氏名</span>
                                <span class="required">必須</span>
                            </dt><!-- /.p-contact-form__item-head -->
                            <dd class="p-contact-form__item-body">
                                <input type="text" name="" placeholder="山田太郎">
                            </dd><!-- /.p-contact-form__item-body -->
                        </dl><!-- /.p-contact-form__item -->
                        <dl class="p-contact-form__item">
                            <dt class="p-contact-form__item-head">
                                <span class="title">お問い合わせ内容</span>
                                <span class="required">必須</span>
                            </dt><!-- /.p-contact-form__item-head -->
                            <dd class="p-contact-form__item-body">
                                <textarea name="" cols="30" rows="10" placeholder="お気軽にお問い合わせください。"></textarea>
                            </dd><!-- /.p-contact-form__item-body -->
                        </dl><!-- /.p-contact-form__item -->
                        <div class="p-contact-form__submit">
                            <input type="submit" value="送信する" class="c-button-normal">
                        </div><!-- /.p-contact-form__submit -->
                    </form><!-- /.p-contact-form -->
                </div><!-- /.c-container -->
            </div><!-- /.p-home-contact -->
        </main><!-- /.l-body -->

        <div class="l-footer">
            <div class="l-footer__main">
                <div class="l-footer__contents1">
                    <a href="/" class="l-footer__logo">
                        <img src="assets/images/common/logo.png" alt="All in one Scheduler | 仕事もプライベートも一元管理" srcset="assets/images/common/logo@2x.png 2x">
                    </a>
                </div><!-- /.l-footer__contents1 -->
                <div class="l-footer__contents2">
                    <ul class="l-footer__global">
                        <li>
                            <a href="#">メニュー1</a>
                        </li>
                        <li>
                            <a href="#">メニュー2</a>
                        </li>
                        <li>
                            <a href="#">メニュー3</a>
                        </li>
                        <li>
                            <a href="#">メニュー4</a>
                        </li>
                    </ul><!-- /.l-footer__global -->
                </div><!-- /.l-footer__contents2 -->
            </div><!-- /.l-footer__main -->
            <div class="l-footer__copy">
                <small>&copy; All in one Sucheduler 2024</small>
            </div><!-- /.l-footer__copy -->
        </div><!-- /.l-footer -->

        <script src="./assets/js/vendor.bundle.js"></script>
        <script src="./assets/js/app.bundle.js"></script>
    </body>
</html>
