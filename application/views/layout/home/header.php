<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>Layout - Forms - PixelAdmin: Responsive Bootstrap Template</title>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- DEMO ONLY: Function for the proper stylesheet loading according to the demo settings -->
    <script>
        function _pxDemo_loadStylesheet(a, b, c) {
            var c = c || decodeURIComponent((new RegExp(";\\s*" + encodeURIComponent("px-demo-theme") + "\\s*=\\s*([^;]+)\\s*;", "g").exec(";" + document.cookie + ";") || [])[1] || "clean"),
                d = "rtl" === document.getElementsByTagName("html")[0].getAttribute("dir");
            document.write(a.replace(/^(.*?)((?:\.min)?\.css)$/, '<link href="$1' + (c.indexOf("dark") !== -1 && a.indexOf("/css/") !== -1 && a.indexOf("/themes/") === -1 ? "-dark" : "") + (!d || 0 !== a.indexOf("assets/css") && 0 !== a.indexOf("assets/demo") ? "" : ".rtl") + '$2" rel="stylesheet" type="text/css"' + (b ? 'class="' + b + '"' : "") + ">"))
        }
    </script>

    <!-- DEMO ONLY: Set RTL direction -->
    <script>
        "ltr" !== document.getElementsByTagName("html")[0].getAttribute("dir") && "1" === decodeURIComponent((new RegExp(";\\s*" + encodeURIComponent("px-demo-rtl") + "\\s*=\\s*([^;]+)\\s*;", "g").exec(";" + document.cookie + ";") || [])[1] || "0") && document.getElementsByTagName("html")[0].setAttribute("dir", "rtl");
    </script>

    <!-- DEMO ONLY: Load PixelAdmin core stylesheets -->
    <script>
        _pxDemo_loadStylesheet("<?php echo base_url('assets/css/bootstrap.min.css') ?>", 'px-demo-stylesheet-bs');
        _pxDemo_loadStylesheet("<?php echo base_url('assets/css/pixeladmin.min.css') ?>", 'px-demo-stylesheet-core');
        _pxDemo_loadStylesheet("<?php echo base_url('assets/css/widgets.min.css') ?>", 'px-demo-stylesheet-widgets');
    </script>

    <!-- DEMO ONLY: Load theme -->
    <script>
        function _pxDemo_loadTheme(a) {
            var b = decodeURIComponent((new RegExp(";\\s*" + encodeURIComponent("px-demo-theme") + "\\s*=\\s*([^;]+)\\s*;", "g").exec(";" + document.cookie + ";") || [])[1] || "clean");
            _pxDemo_loadStylesheet(a + b + ".min.css", "px-demo-stylesheet-theme", b)
        }
        _pxDemo_loadTheme("<?php echo base_url('assets/css/themes/') ?>");
    </script>

    <!-- Demo assets -->
    <script>
        _pxDemo_loadStylesheet("<?php echo base_url('assets/demo/demo.css') ?>");
    </script>
    <!-- / Demo assets -->

    <!-- holder.js -->
    <script src="<?php echo base_url("assets/js/jquery.3.2.1.js") ?>"></script>
    <!-- Pace.js -->
    <script src="<?php echo base_url('assets/pace/pace.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/demo/demo.js') ?>"></script>
</head>