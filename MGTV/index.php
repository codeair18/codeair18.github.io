<?php
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/pragmatic.css">

    <title>Pamięć, sprawny umysł i refleks</title>
    <script type="text/javascript">
     (function (p, r, a, g, m, b, o, x) {
        if (p.pragmbox) return;
        b = p.pragmbox = function () {
          b.callMethod ? b.callMethod.apply(b, arguments) : b.queue.push(arguments);
        };
        if (!p._pragmbox) p._pragmbox = b;
        b.push = b;
        b.loaded = !0;
        b.queue = [];
        b.advId = m;
        o = r.createElement(a);
        o.async = !0;
        o.src = g;
        x = r.getElementsByTagName(a)[0];
        x.parentNode.insertBefore(o, x);
     })(window, document, 'script', 'https://ad.pragmaticbox.com/js/cookie.min.js', '49');
     pragmbox('init', 'mastergame.tv');
    </script>
</head>
<body>

<section class="container">
    <div class="row mb-5 mt-5">
        <div class="col-lg-4 ">
            <img src="img/LogoSmall.png" height="130">
        </div>
        <div class="col-lg-8 col-sm-12 text-center d-none d-lg-block">
            <img src="img/Logo.png" height="175">
        </div>
    </div>
</section>
<section id="studio" class="container">
    <div class="row">
        <div class="col-md-2">
            <img id="pijanowski-img" src="img/pijanowski_cut.png" height="700">

        </div>
        <div class="col-md-4 pb-3 info-dane">

            <!--<div class="col-sm-12" style="margin-top: 400px">-->
                <!--<span class="uppercase bold">Zapoznaj się z polityką przetwarzania danych.</span>-->
            <!--</div>-->
            <!--<div class="col-sm-12 mt-5">-->
                <!--<span class="uppercase bold">Pamiętaj, że masz prawo do usunięcia podanych nam w formularzu danych osobowych. Aby z niego skorzystać <br> <a-->
                        <!--href="#" class="uppercase text-gray">Kliknij tutaj</a> </span>-->
            <!--</div>-->
        </div>
        <div id="lead-form" class="col-md-6">
            <div class="info-box down-arrow mb-5">
                <span>ZAPISZ SIĘ I WEŹ UDZIAŁ W NOWYM TELETURNIEJU</span>

            </div>
            <!--<form class="px-4" action="/">-->
            <!--<div class="form-group">-->
            <!--<input type="text" class="form-control" id="firstName"-->
            <!--placeholder="IMIĘ">-->
            <!--</div>-->
            <!--<div class="form-group">-->
            <!--<input type="text" class="form-control" id="lastName"-->
            <!--placeholder="NAZWISKO">-->
            <!--</div>-->
            <!--<div class="form-group">-->
            <!--&lt;!&ndash;<label for="exampleInputEmail1">Email address</label>&ndash;&gt;-->
            <!--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"-->
            <!--placeholder="E-MAIL">-->
            <!--&lt;!&ndash;<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>&ndash;&gt;-->
            <!--</div>-->
            <!--<div class="form-group">-->
            <!--&lt;!&ndash;<label for="exampleInputPassword1">Hasło</label>&ndash;&gt;-->
            <!--<input type="number" class="form-control" id="exampleInputPassword1" placeholder="TELEFON">-->
            <!--</div>-->
            <!--<div class="form-group form-check bottom-dotted pb-3">-->
            <!--<div class="double">-->
            <!--<input type="checkbox" class="form-check-input" id="exampleCheck1">-->
            <!--</div>-->
            <!--<label class="form-check-label pl-3 uppercase bold pt-2" for="exampleCheck1">Wyrażam zgodę na-->
            <!--kontakt telefoniczny doradcy mgtv</label>-->
            <!--</div>-->
            <!--<div style="text-align: center">-->
            <!--<div class="d-flex justify-content-center">-->
            <!--<div class="arrow-down"></div>-->
            <!--</div>-->
            <!--<button type="submit" class="custom-btn">Zatwierdź</button>-->
            <!--</div>-->
            <!--</form>-->
            <div style="margin-top: -50px">
                <script>var fmFCF3m1mhy13u9 = function (e) {
                    if (e.data.type === 'resize') {
                        document.getElementById('fm-fc-f-3m1mhy13u9').style.minHeight = e.data.size + 'px'
                    }
                };
                window.addEventListener ? addEventListener('message', fmFCF3m1mhy13u9, !1) : attachEvent('onmessage', fmFCF3m1mhy13u9);
                </script>
                <iframe id="fm-fc-f-3m1mhy13u9" src="https://forms.freshmail.io/f/xyzf08ot1b/3m1mhy13u9/index.html"
                        frameborder="0" marginheight="0" marginwidth="0" width="100%" style="min-height: 721px"></iframe>
            </div>

        </div>
    </div>

</section>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>