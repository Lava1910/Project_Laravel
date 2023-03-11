
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

    <title>FPT Education</title>

    <link rel="icon" type="image/x-icon" href="/images/edn-favicon.png" />
    <link rel="shortcut icon" type="image/x-icon" href="/images/edn-favicon.png" />

    <link rel="stylesheet" href="/lib/bootstrap/dist/css/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="/lib/line-awesome/css/line-awesome.min.css" />
    <link rel="stylesheet" href="/css/site.css" />
</head>
<body class="identity-site">

<h1 id="site-logo"> <img src="/images/Logo_Đại_học_FPT.png" width="250px" height="100px" alt="FPT-Education"/></h1>
<main id="wrap-main-content">

    <div class="identity-tabs">
        <a class="btn btn-secondary active" href="/vi/Account/Login">Login</a>
    </div>

{{--    <ul class="list-social-login">--}}

{{--        <li class="social-login-item">--}}
{{--            <a class="btn btn-social-login google-login" href="/vi/External/Challenge?scheme=Google&amp;returnUrl=%2Fconnect%2Fauthorize%2Fcallback%3Fclient_id%3Dmvc%26redirect_uri%3Dhttps%253A%252F%252Ffai.edunext.vn%252Fsignin-oidc%26response_type%3Dcode%26scope%3Dopenid%2520profile%2520api1%26code_challenge%3DF3EQybf3Fai_TkrzByC6IDlp_JW5i6pFKm4yEVoONjs%26code_challenge_method%3DS256%26response_mode%3Dform_post%26nonce%3D638140798839982907.OWJlODEwN2UtZjRjYy00ZjBjLTgxYzMtN2JlOGNkMWJlNGIyMjZlNmUyOWYtZjc2OC00YWY4LWIwMjEtMWYwNWM3Zjk0NTk2%26state%3DCfDJ8CHoe066BxVGr5LeQKWGnERwq-11m7fJASTA0YQ0FLsjr_V2F_yt8Uf5EfSfpuZ3aNY3gJrnFtjRzic6TP9Vnlsy__D1fArWsCiGE5I0e0LUbqvz2cAjDJfxaTVfZO4IIBlCbh4YFJSo-Dvo_r7FV5dovTvjoEK_7DxVFjgin73kND8-mbD1GjiricOg2zJKycBXYoC7gCDDkInjcKwgqWC1zj6FfkUUglDLHs-uyjwikPQ18olzGFnNYm6g3Yr5JmLx8eReTjhVcg4iicwhlw27a8cuo9AMJhn4vkCTbnWynO0L6y6gM23EWYqSusbdVtZDQqjAv8LSkrd68X_7QzNCchyXN4LkRHVuFv8ARBkaTtWw9MXnAQyLz5vqo6tZ3Q%26x-client-SKU%3DID_NETSTANDARD2_0%26x-client-ver%3D5.5.0.0">--}}
{{--                <img src='/images/logo-gg-new.png' class='' alt='Login with Google account'></img>--}}
{{--                Sign in with @fpt.edu.vn--}}
{{--            </a>--}}
{{--        </li>--}}
{{--    </ul>--}}

    <form class="indentity-form" action="" method="post">
        <input type="hidden" id="ReturnUrl" name="ReturnUrl" value="/connect/authorize/callback?client_id=mvc&amp;redirect_uri=https%3A%2F%2Ffai.edunext.vn%2Fsignin-oidc&amp;response_type=code&amp;scope=openid%20profile%20api1&amp;code_challenge=F3EQybf3Fai_TkrzByC6IDlp_JW5i6pFKm4yEVoONjs&amp;code_challenge_method=S256&amp;response_mode=form_post&amp;nonce=638140798839982907.OWJlODEwN2UtZjRjYy00ZjBjLTgxYzMtN2JlOGNkMWJlNGIyMjZlNmUyOWYtZjc2OC00YWY4LWIwMjEtMWYwNWM3Zjk0NTk2&amp;state=CfDJ8CHoe066BxVGr5LeQKWGnERwq-11m7fJASTA0YQ0FLsjr_V2F_yt8Uf5EfSfpuZ3aNY3gJrnFtjRzic6TP9Vnlsy__D1fArWsCiGE5I0e0LUbqvz2cAjDJfxaTVfZO4IIBlCbh4YFJSo-Dvo_r7FV5dovTvjoEK_7DxVFjgin73kND8-mbD1GjiricOg2zJKycBXYoC7gCDDkInjcKwgqWC1zj6FfkUUglDLHs-uyjwikPQ18olzGFnNYm6g3Yr5JmLx8eReTjhVcg4iicwhlw27a8cuo9AMJhn4vkCTbnWynO0L6y6gM23EWYqSusbdVtZDQqjAv8LSkrd68X_7QzNCchyXN4LkRHVuFv8ARBkaTtWw9MXnAQyLz5vqo6tZ3Q&amp;x-client-SKU=ID_NETSTANDARD2_0&amp;x-client-ver=5.5.0.0" />
        <div class="wrap-form-field">
            <div class="form-group group-width-icon">
                <i class="la la-user"></i>
                <input class="form-control" placeholder="Email" autofocus type="text" data-val="true" data-val-required="Username is required" id="Username" name="Username" value="">
            </div>
            <span class="text-danger field-validation-valid" data-valmsg-for="Username" data-valmsg-replace="true"></span>
        </div>
        <div class="wrap-form-field">
            <div class="form-group group-width-icon">
                <i class="la la-lock"></i>
                <input type="password" class="form-control" placeholder="Password" autocomplete="off" data-val="true" data-val-required="Password is required" id="Password" name="Password">
            </div>
            <span class="text-danger field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
        </div>

        <button class="btn btn-primary edn-btn-login" name="button" value="login">Log In</button>

        <a class="btn return-home-page text-bold" href="#" title="EduNext">Forgotten password?</a>
        <input name="__RequestVerificationToken" type="hidden" value="CfDJ8CHoe066BxVGr5LeQKWGnEQOiyPYYV-dpMubq78Og2YlTNqGfltI3HknUwtQ1G08fZk0AF31wd9pQKyNyn_ZezNQhqJZr1ITYKquI7QsIOZv5f3M955ENpXwvtE2_1Uadkb_9m2ScS4Q-kl_p57Z8-g" /></form>


</main>

<script src="/lib/jquery/dist/jquery.slim.min.js"></script>
<script src="/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
