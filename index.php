<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="web/libraries/css/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,500,500i,700,700i|PT+Sans:400,700" rel="stylesheet" />
    <link rel="stylesheet" href="web/custom/css/style.css" type="text/css" />
    <link rel="stylesheet" href="//unpkg.com/leaflet@1.2.0/dist/leaflet.css" integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ==" crossorigin=""/>
</head>

<body>
    <header ui-view="navbar" class="container" role="navigation"><?php include "tpl/Navbar/Navbar.html"; ?></header>

    <div ui-view="page" id="pageContainer"><?php

        if(isset($_GET['p'])) {
            include "tpl/Content/".$_GET['p'].".html";
        } else {
            include "tpl/Home/Home.html";
        }

        ?></div>

    <footer ui-view="footer"><?php include "tpl/Footer/Footer.html"; ?></footer>

    <script type="text/javascript" src="//code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
