<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="/images/favicon.png">
    <title>
        <?php wp_title('|', true, 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>
    <?php  wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
    <div class="max">
    <div class="head-wrap container row twelve">
        <div id="mobile-nav"></div>
        <div class="logo col-sd-12 col-dd-3">
            <a href="https://www.dimensionaldental.com/"><img src="/images/logo.png" alt="Dimensional Dental Logo" /></a>
        </div>
        <div class="col-sd-12 col-dd-9 navigation">
            <nav class="topnav">
                <ul>
                    <li><a href="https://www.dimensionaldental.com/who_we_support.html">locations</a></li>
                    <li><a href="https://www.dimensionaldental.com/affiliate_with_us.html">join our network</a></li>
                    <li><a href="https://www.dimensionaldental.com/careers.html">careers</a></li>
                    <li><a href="https://www.dimensionaldental.com/contact.html">contact</a></li>
                    <li><a href="https://www.dimensionaldental.com/blog">news</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
</header>
