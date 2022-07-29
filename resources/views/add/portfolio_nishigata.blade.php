<!DOCTYPE html>
<html lang="ja">
<!-- マウスポインタ等の動きを制御 -->
<head>
    <meta charset="UTF-8">
    <title>portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/turn.js') }}"></script>
    <script src="{{ asset('js/my_script.js') }}"></script>
</head>
<body>
<!-- ポートフォリオ「表」格納先指定（西潟） -->
<div class="container">
    <div id="portfolio">
        <div><img src="{{ asset('storage\img\portfolio_nishigata\スライド1.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_nishigata\スライド2.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_nishigata\スライド3.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_nishigata\スライド4.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_nishigata\スライド5.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_nishigata\スライド6.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_nishigata\スライド7.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_nishigata\スライド8.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_nishigata\スライド9.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_nishigata\スライド10.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_nishigata\スライド11.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_nishigata\スライド12.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_nishigata\スライド13.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_nishigata\スライド14.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_nishigata\スライド15.JPG') }}" alt="portfolio"></div>
        <div><img src="{{ asset('storage\img\portfolio_nishigata\スライド16.JPG') }}" alt="portfolio"></div>
    </div>
    <a href="/">二へ二へ動画へ戻る</a>
    <a href="/atioa_poroslgtnihfi">裏</a>
    <a href="{{ asset('storage/pdf/portfolio_nishigata.pdf') }}"
       download="portfolio"> portfolio.pdfのダウンロード</a>
</div>

</body>
</html>
