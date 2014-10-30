<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
/**
 * view/template.php
 *
 * Pass in $pagetitle (which will in turn be passed along)
 * and $pagebody, the name of the content view.
 *
 * ------------------------------------------------------------------------
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{title}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- Bootstrap Core CSS -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
        <!-- Primary CSS -->
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="/assets/css/simple-sidebar.css"/>
        <!-- HOVER CSS -->
        <link href="/assets/css/hover.css" rel="stylesheet" media="all">
    </head>
    <body>
        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                {menubar}
            </div>
            <!-- /#sidebar-wrapper -->

            <div class="top-bar visible-xs">
                <a href="/">AMSTERDAM</a><br/>
                <a href="/eat">EAT</a> - <a href="/play">PLAY</a> - <a href="/sleep">SLEEP</a>
            </div>

            <div id="content">
                {content}
            </div>

            <div class="footer span12">
                Copyright &copy; 2014, <a href="mailto:glo18@mybcit.ca">Germaine Lo</a> and <a href="mailto:glo18@mybcit.ca">Danny
                    Tran</a>.
                <a href="/admin">Admin</a>
            </div>
        </div>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/jquery-1.11.1.min.js"></script>


    </body>
</html>
