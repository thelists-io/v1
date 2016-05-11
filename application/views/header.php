<!DOCTYPE html>
<html lang="ar" dir="rtl">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=works">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title> القوائم </title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Icons -->
        <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/open-iconic-bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/flaticon.css" rel="stylesheet">

        <!-- Libraries -->
        <link href="<?php echo base_url();?>assets/css/bootstrap-select.min.css" rel="stylesheet">

        <!-- React -->
        <link href="<?php echo base_url();?>assets/react/node_modules/todomvc-common/base.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/react/node_modules/todomvc-app-css/index.css" rel="stylesheet">

        <!-- Packages CSS & JS -->
        <link href="<?php echo base_url();?>assets/packages/filter/css/style.css" rel="stylesheet">
        <script src="<?php echo base_url();?>assets/packages/filter/js/modernizr.js"></script>

        <!-- App -->
        <link href="<?php echo base_url();?>assets/css/app.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- le Favicons -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>assets/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>assets/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>assets/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="/image/png" href="<?php echo base_url();?>assets/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="/image/png" href="<?php echo base_url();?>assets/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="/image/png" href="<?php echo base_url();?>assets/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="/image/png" href="<?php echo base_url();?>assets/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?php echo base_url();?>assets/favicons/manifest.json">
        <link rel="mask-icon" href="<?php echo base_url();?>assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
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
                        <span class="sr-only"> قائمة التصفح </span>
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
                        <li><a href="<?php echo base_url();?>" title="الأولى">الأولى</a></li>
                        <li <?php if (($this->uri->uri_string() == 'about')) {echo 'class="active"';} ?>><a href="<?php echo base_url();?>about/" title="حول الموقع">حول الموقع</a></li>
                        <li <?php if (($this->uri->uri_string() == 'contributors')) {echo 'class="active"';} ?>><a href="<?=base_url();?>contributors/" title="المساهمون">المساهمون</a></li>
                    </ul>
                </div>
            </div>
        </nav>
