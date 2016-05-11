<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=works">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Project Name -->
        <title> Lists.io </title>
        <!-- Bootstrap -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Icons -->
        <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="/assets/css/open-iconic-bootstrap.min.css" rel="stylesheet">
        <link href="/assets/css/flaticon.css" rel="stylesheet">
        <!-- Libraries -->
        <link href="/assets/css/bootstrap-select.min.css" rel="stylesheet">
        <!-- new -->
        <link href="/assets/react/node_modules/todomvc-common/base.css" rel="stylesheet">
        <link href="/assets/react/node_modules/todomvc-app-css/index.css" rel="stylesheet">
        <!-- Packages CSS & JS -->
        <link href="/assets/packages/headline/css/style.css" rel="stylesheet">
        <link href="/assets/packages/filter/css/style.css" rel="stylesheet">
        <script src="/assets/packages/filter/js/modernizr.js"></script>
        <!-- Helpers -->
        <link href="/assets/css/helpers.css" rel="stylesheet">
        <!-- App -->
        <link href="/assets/css/app.css" rel="stylesheet">
        <link href="/assets/css/npm.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- le Favicons -->
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="/image/png" href="/assets/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="/image/png" href="/assets/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="/image/png" href="/assets/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="/image/png" href="/assets/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/assets/favicons/manifest.json">
        <link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="assets/favicons/mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">

	<script>
            window.fbAsyncInit = function () {
                FB.init({
                    appId: '271510296524588',
                    xfbml: true,
                    version: 'v2.6'
                });
            };

            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <script>window.twttr = (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0],
                        t = window.twttr || {};
                if (d.getElementById(id))
                    return t;
                js = d.createElement(s);
                js.id = id;
                js.src = "https://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js, fjs);

                t._e = [];
                t.ready = function (f) {
                    t._e.push(f);
                };

                return t;
            }(document, "script", "twitter-wjs"));
        </script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>

    </head>
    <body>
        <!-- Main Navigation -->
        <nav class="navbar navbar-default" role="nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".menu" title="Menu">
                        <span class="sr-only"> Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>" title="القوائم">
                        <i class="flaticon-add-square"></i> القوائم
                    </a>
                </div>
                <div class="collapse navbar-collapse menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url();?>" title="Home">home</a></li>
                        <li><a href="<?php echo base_url();?>about/" title="About">about</a></li>
                        <li><a href="<?=base_url();?>contributors/" title="Contributors">contributors</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="header hide" role="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4 helper-xs-mt2">
                        <p>
                            <a href="#" class="btn-create" title="Create">
                                <i class='flaticon-add'></i> Start a list
                            </a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-8 text-right hidden-xs hide">
                        <p class="cd-headline zoom">
                            <span>A curated lists of delightful resources about tech, life and more.</span>
                            <span class="cd-words-wrapper hide">
                                <b class="is-visible">work</b>
                                <b>travel</b>
                                <b>life</b>
                                <b>business</b>
                                <b>programming</b>
                                <b>wedding</b>
                                <b>and much more</b>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
