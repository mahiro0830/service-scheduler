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
                    <img src="assets/images/common/logo.png" alt="All in one Scheduler | 仕事もプライベートも一元管理"
                        srcset="assets/images/common/logo@2x.png 2x">
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

    <main class="l-body p-login">
        <div class="c-container">
            <form class="p-login-form" action="" method="post">
                <dl class="p-login-form__item">
                    <dt>メールアドレス</dt>
                    <dd>
                        <input type="email" name="email">
                    </dd>
                </dl><!-- /.p-login-form__item -->
                <dl class="p-login-form__item">
                    <dt>パスワード</dt>
                    <dd>
                        <input type="password" name="password">
                    </dd>
                </dl><!-- /.p-login-form__item -->
                <a href="#" class="p-login-form__link">新規会員登録</a>
                <div class="p-login-form__submit">
                    <input type="submit" value="ログイン">
                </div><!-- /.p-login-form__submit -->
            </form><!-- /.p-login-form -->
        </div><!-- /.c-container -->
    </main><!-- /.l-body -->

    <div class="l-footer">
        <div class="l-footer__main">
            <div class="l-footer__contents1">
                <a href="/" class="l-footer__logo">
                    <img src="assets/images/common/logo.png" alt="All in one Scheduler | 仕事もプライベートも一元管理"
                        srcset="assets/images/common/logo@2x.png 2x">
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
