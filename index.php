<?php
    $magclassic = false;
    $result = 'no';

    // MAG Classic.
    if (date('Ymd', strtotime('2015-09-11')) == date('Ymd') || date('Ymd', strtotime('2015-09-12')) == date('Ymd') || date('Ymd', strtotime('2015-09-13')) == date('Ymd'))
    {
        $magclassic = true;
        $result = 'sort of';
    }

    // MAG 2016 Dates.
    if (date('Ymd', strtotime('2016-02-18')) == date('Ymd') || date('Ymd', strtotime('2016-02-19')) == date('Ymd') || date('Ymd', strtotime('2016-02-20')) == date('Ymd') || date('Ymd', strtotime('2016-02-21')) == date('Ymd'))
        $result = 'yes';
    else if (date('Ymd', strtotime('2016-02-17')) == date('Ymd'))
        $result = 'almost';
    else if (date('Ymd', strtotime('2016-02-22')) == date('Ymd'))
        $result = 'just missed it';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Is It MAGFest Yet?</title>
        <meta name="description" content="Is It MAGFest Yet? The answer to the question everyone wants to know.">
        <meta name="keywords" content="is, it, MAG, mag, magfest, MAGFest, yet, please, Music and Gaming Festival">
        <link href="http://isitmagfestyet.com" rel="canonical">

        <meta property="og:title" content="Is It MAGFest Yet?">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://isitmagfestyet.com">
        <meta property="og:image" content="/img/magfest-logo.png">
        <meta property="og:site_name" content="Is It MAGFest Yet?">
        <meta property="og:description" content="Is It MAGFest Yet? The answer to the question everyone wants to know.">

        <link href="/css/app.min.css" rel="stylesheet">
        <link href="/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-44795853-1', 'isitmagfestyet.com');
            ga('send', 'pageview');
        </script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="text-center <?php echo $magclassic ? 'magclassic' : ''; ?>">
        <div class="offset"></div>
        <div class="container home">
            <h1 class="<?php echo str_replace(' ', '-', $result); ?>"><?php echo strtoupper($result); ?></h1>
            <audio id="audio">
                <source src="/audio/colossus.mp3" type="audio/mpeg">
                <source src="/audio/colossus.ogg" type="audio/ogg">
                <embed height="0" width="0" src="audio/colossus.mp3">
            </audio>
        </div>
        <footer>
            <p class="<?php echo $magclassic ? 'magclassic-logo' : 'magfest-logo'; ?>">
                <a href="<?php echo $magclassic ? 'http://classic.magfest.org' : 'http://magfest.org'; ?>" target="_blank">
                    <img class="img-responsive" src="/img/<?php echo $magclassic ? 'magclassic-logo' : 'magfest-logo'; ?>.png" alt="MAGFest" <?php echo $magclassic ? 'width="640" height="395"' : 'width="345" height="65"'; ?>>
                </a>
            </p>
        </footer>

        <script src="/js/app.min.js"></script>
    </body>
</html>
