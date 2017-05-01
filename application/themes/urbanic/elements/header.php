<!DOCTYPE html>
<html lang="en">
<head>

    <?php Loader::element('header_required'); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="shortcut icon" href="PUT YOUR FAVICON HERE">-->

    <!-- Google Web Font Embed -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <?php

        print $html->css('css/bootstrap.css');
        print $html->css('css/colorbox.css');
        print $html->css($view->getStyleSheet('templatemo_style.less'));

    ?>
</head>

<body>

<div class="<?= $c->getPageWrapperClass() ?>">

    <div class="templatemo-top-bar" id="templatemo-top">
        <div class="container">
            <div class="subheader">
                <div id="phone" class="pull-left">
                    <img src="<?= $view->getThemePath() ?>/images/phone.png" alt="phone"/>
                    090-080-0110
                </div>
                <div id="email" class="pull-right">
                    <img src="<?= $view->getThemePath() ?>/images/email.png" alt="email"/>
                    info@company.com
                </div>
            </div>
        </div>
    </div>
    <div class="templatemo-top-menu">
        <div class="container">
            <!-- Static navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand"><img src="<?= $view->getThemePath() ?>/images/templatemo_logo.png" alt="Urbanic Template" title="Urbanic Template" /></a>
                    </div>
                    <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                        <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                            <li class="active"><a href="#templatemo-top">HOME</a></li>
                            <li><a href="#templatemo-about">ABOUT</a></li>
                            <li><a href="#templatemo-portfolio">PORTFOLIO</a></li>
                            <li><a href="#templatemo-blog">BLOG</a></li>
                            <li><a rel="nofollow" href="http://www.facebook.com/templatemo"
                                   class="external-link" target="_parent">EXTERNAL</a></li>
                            <li><a href="#templatemo-contact">CONTACT</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </div><!--/.navbar -->
        </div> <!-- /container -->
    </div>