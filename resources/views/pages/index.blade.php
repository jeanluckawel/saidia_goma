<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content>
    <meta name="author" content>
    <link rel="icon" type="image/png" href="img/logo.svg">
    <title>saidi goma</title>

    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css" />

    <link href="vendor/icons/icofont.min.css" rel="stylesheet" type="text/css">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link href="vendor/sidebar/demo.css" rel="stylesheet">

    <style>
        #blue {
            background-color: #0085CA;
        }
        #red{
            background-color: #EF3340;
        }
        #yellow {
            background-color: #FFD100;
        }
    </style>
</head>
<body class="fixed-bottom-padding">

<section class="osahan-main-body">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center vh-100">
            <div id="blue" class="landing-page bg-blue shadow-sm col-lg-6">
                <div class="osahan-slider m-0">
                    <div class="osahan-slider-item text-center">
                        <div class="d-flex align-items-center justify-content-center vh-100 flex-column">
                            <i class="icofont-sale-discount display-1 text-warning"></i>
{{--                            <img src= "{{ asset('/img/img_1.png') }}" class="w-25" alt="">--}}
                            <h4 class="my-4 text-white">SAIDIA GOMA</h4>
                            <p class="text-center text-white-50 mb-5 px-4">Contribuer avec 1000 Fc <br> ou plus pour aider les gens de Goma.</p>
                        </div>
                    </div>
                    <div class="osahan-slider-item text-center">
                        <div class="d-flex align-items-center justify-content-center vh-100 flex-column">
                            <i class="icofont-cart display-1 text-warning"></i>
                            <h4 class="my-4 text-white">DR CONGO</h4>
                            <p class="text-center text-white-50 mb-5 px-4"> La RDC est située au cœur de l'Afrique, partageant
                                <br> des frontières avec neuf pays</p>
                        </div>
                    </div>
                    <div class="osahan-slider-item text-center">
                        <div class="d-flex align-items-center justify-content-center vh-100 flex-column">
                            <i class="icofont-support-faq display-1 text-warning"></i>
                            <h4 class="my-4 text-white">GOMA</h4>
                            <p class="text-center text-white-50 mb-5 px-4">Goma est située sur les rives du lac Kivu,
                                <br> à proximité de la frontière avec le Rwanda </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pl-lg-5">
                <div class="osahan-signup shadow bg-white p-4 rounded">
                    <div class="p-3">
                        <h2 class="my-0">Saidia Goma</h2>
                        <p class="small mb-2">Contribuer avec 1000 Fc ou plus pour aider les gens de Goma.</p>
                        <div class="d-flex">
                            <div id="red" class="p-1 w-25"></div>
                            <div id="yellow" class="p-1 w-50"></div>
                            <div id="blue" class="p-1 w-25"></div>
                        </div>
                        <form action="" method="POST" class="mt-2">
                            <div class="form-group">
                                <label for="exampleInputName1">Nom</label>
                                <input placeholder="Jean luc Kawel" type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNumber1">Numéro de téléphone</label>
                                <input placeholder="0974453545" type="number" class="form-control" id="exampleInputNumber1" aria-describedby="emailHelp">
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="form-group">
                                    <label for="exampleInputNumber1">Montant</label>
                                    <input min="1000" placeholder="1000" type="number" class="form-control" id="exampleInputNumber1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label  for="exampleInputNumber1">Devise</label>
                                    <select class="form-control ">
                                        <option selected value="CDF">CDF</option>
                                        <option value="USD">USD</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" id="blue" class="btn rounded btn-lg btn-block text-white">Contribuer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="vendor/jquery/jquery.min.js" type="e4d27a6eebd5f4f8b02631c3-text/javascript"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="e4d27a6eebd5f4f8b02631c3-text/javascript"></script>

<script type="e4d27a6eebd5f4f8b02631c3-text/javascript" src="vendor/slick/slick.min.js"></script>

<script type="e4d27a6eebd5f4f8b02631c3-text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>

<script src="js/osahan.js" type="e4d27a6eebd5f4f8b02631c3-text/javascript"></script>
<script src="https://askbootstrap.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="e4d27a6eebd5f4f8b02631c3-|49" defer></script><script defer src="../../../static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8574141aedc46f7e","r":1,"version":"2024.2.0","token":"dd471ab1978346bbb991feaa79e6ce5c"}' crossorigin="anonymous"></script>
</body>

</html>
