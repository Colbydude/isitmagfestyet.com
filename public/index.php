<?php
    $bg_color = '#e91e63';                  // Background color.
    $date = date('Y-m-d');                  // Today's date.
    $link = 'https://super.magfest.org';    // Link the logo will go to.
    $logo = 'magfest-logo.png';             // Logo to show.
    $result = 'no';                         // End result to show.

    // MAGFest 2025 Dates.
    $dates = [
        '2025-01-22',                       // Day Before.
        '2025-01-23',
        '2025-01-24',
        '2025-01-25',
        '2025-01-26',
        '2025-01-27'                        // Day After.
    ];

    if ($date == reset($dates)) {
        $result = 'almost';
    } elseif ($date == array_pop($dates)) {
        $result = 'just missed it';
    } elseif (in_array($date, $dates)) {
        $result = 'yes';
    }
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
        <link href="https://isitmagfestyet.com" rel="canonical">

        <meta property="og:title" content="Is It MAGFest Yet?">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://isitmagfestyet.com">
        <meta property="og:image" content="/img/magfest-logo.png">
        <meta property="og:site_name" content="Is It MAGFest Yet?">
        <meta property="og:description" content="Is It MAGFest Yet? The answer to the question everyone wants to know.">

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        <link href="/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body style="background-color: <?php echo $result == 'yes' ? $bg_color : 'black'; ?>">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h1 class="<?php echo str_replace(' ', '-', $result); ?>"><?php echo strtoupper($result); ?></h1>
                <audio id="audio">
                    <source src="/audio/colossus.mp3" type="audio/mpeg">
                    <source src="/audio/colossus.ogg" type="audio/ogg">
                    <embed height="0" width="0" src="audio/colossus.mp3">
                </audio>
            </div>
        </div>

        <footer>
            <div class="magfest-logo">
                <a href="<?php echo $link; ?>" target="_blank">
                    <img src="/img/<?php echo $logo; ?>" alt="MAGFest" width="345" height="65">
                </a>
            </div>
        </footer>

        <script src="/js/app.js"></script>
        <script>
            (function(m,a,g,f,e,s,t){m['GoogleAnalyticsObject']=e;m[e]=m[e]||function(){
                (m[e].q=m[e].q||[]).push(arguments)},m[e].l=1*new Date();s=a.createElement(g),
                t=a.getElementsByTagName(g)[0];s.async=1;s.src=f;t.parentNode.insertBefore(s,t)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-44795853-1', 'isitmagfestyet.com');
            ga('send', 'pageview');
        </script>
    </body>
</html>
