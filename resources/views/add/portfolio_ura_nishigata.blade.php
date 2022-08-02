<!DOCTYPE html>
<html lang="ja">
<!-- マウスポインタ等の動きを制御 -->
<head>
    <meta charset="UTF-8">
    <title>portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/portfolio/turn.js') }}"></script>
    <script src="{{ asset('js/portfolio/my_script.js') }}"></script>
</head>
<body>
<!-- ポートフォリオ「裏」格納先指定（西潟） -->
<div class="container">
    <div id="portfolio">
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド1.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド2.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド3.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド4.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド5.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド6.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド7.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド8.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド9.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド10.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド11.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド12.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド13.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド14.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド15.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド16.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド17.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド18.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド19.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド20.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド21.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド22.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド23.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド24.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド25.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド26.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド27.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド28.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド29.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド30.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド31.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_ura_nishigata\スライド32.JPG') }}" alt="portfolio"></div>
    </div>
    <a href="/">二へ二へ動画へ戻る</a>
    <a href=/portfolio_nishigata>表</a>
    <a href="{{ asset('storage/pdf/portfolio_ura_nishigata.pdf') }}"
       download="supplement"> portfolio.pdfのダウンロード</a>
</div>

</body>
</html>
