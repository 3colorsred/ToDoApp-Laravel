<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!-- STYLESHEETS -->
        <link rel="stylesheet" href="{{ URL::asset('_css/main.css') }}" type="text/css" />        
        @yield('page-stylesheet')
        
        <!-- FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,500' rel='stylesheet' type='text/css' />        
    </head>
    <body class="clearfix">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- PAGE CONTENT HERE -->
        <header>
            <h1>ToDo App Using Laravel</h1>
        </header>
        
        <div id="page-content-wrap">
            <div id="sidebar-wrap" class="clearfix">
                <ul class="notes-list">
                    <li class="current-note-selected" data-noteid="1">Note 1</li>
                    <li data-noteid="2">Note 2</li>
                    <li data-noteid="3">Note 3</li>                                
                </ul>
            </div><!-- END sidebar wrap -->
            
            <div id="note-content-wrap">
                <div id="1" class="single-note visible">
                    <h3 class="note-title">Title for FIRST Note!</h3>
                    <p>Note content here.  Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Met, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                </div>
                <div id="2" class="single-note hidden">
                    <h3 class="note-title">Title for SECOND Note!</h3>
                    <p>Note content here.  Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Met, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                </div>
                <div id="3" class="single-note hidden">
                    <h3 class="note-title">Title for THIRD Note!</h3>
                    <p>Note content here.  Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Met, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                </div>
            </div><!-- END note-content-wrap -->
        </div><!-- END page-content-wrap -->
        
        @yield('page-content')





 <!--
       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
-->
        <script src="<?php echo asset('_js/vendor/jquery-1.11.2.min.js') ?>" type="text/javascript"></script>        
        <script src="<?php echo asset('_js/main.js') ?>" type="text/javascript"></script>
    </body>
</html>