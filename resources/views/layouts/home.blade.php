<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="/img/logo-kodak-alaris.png" class="img-responsive" alt="Logo Kodak Alaris" />
                        <p>EAMER Sales and Marketing Who's Who</p>
                    </div>
                    <div class="col-md-push-5 col-sm-3">
                        <ul>
                            <li><a href="#management-team">Management Team</a></li>
                            <li><a href="#sales-team">sales Team</a></li>
                            <li><a href="#product-marketing">Product marketing</a></li>
                            <li><a href="#dach-trade+pr-eamer-team">Dach trade + pr eamer team</a></li>
                            <li><a href="#service-supports">Service &amp; Supports</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-right">
                        &copy; 2017 Kodak Alaris Inc.<br />
                        Confidential – Not to be shared in any kind of form outside the company<br />
                        The Kodak trademark and trade dress are used under license from Eastman Kodak Company
                    </div>
                </div>
            </div>
        </footer>

<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>


        <script src="{{asset('js/app.js')}}"></script>
        <!-- <script src="/js/app.js"></script> -->
    </body>
</html>
