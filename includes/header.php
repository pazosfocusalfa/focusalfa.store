<!doctype html>
<html lang="pt-BR">

<head>

    <?php

        //Metas
        include "includes/config/metas.php";

        //Montagem título
        if ($title_page == ''){
            ?><title>Focus Alfa</title><?php
        }
        else {
            ?><title>Focus Alfa - <?php echo $title_page ?></title><?php
        }

        //CSS
        include "includes/lib/css.php";

        //JS 
        include "includes/lib/js-head.php";
    ?>
   
    <link rel="shortcut icon" href="img/fav.png"/>

   <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TSLN7R3');</script>
    <!-- End Google Tag Manager -->

</head>
<body>

 <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSLN7R3" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
<!-- End Google Tag Manager (noscript) -->