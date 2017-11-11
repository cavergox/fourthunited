<!doctype html>
<html class="no-js" lang="zxx">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {!! SEO::generate() !!}
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ Theme::asset('/img/favicon.jpg') }}">
    
    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ Theme::asset('css/bootstrap.min.css') }}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ Theme::asset('css/core.css') }}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ Theme::asset('css/shortcode/shortcodes.css') }}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ Theme::asset('style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ Theme::asset('css/responsive.css') }}">
    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="{{ Theme::asset('css/color/color-1.css') }}">
    <!-- Modernizr JS -->
    <script src="{{ Theme::asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>

	<div>@include('partials.header')</div>

	<div>@yield('content')</div>

    <div>@include('partials.footer')</div>

       
    <!-- start scrollUp
    ============================================ -->
    <div id="toTop">
        <i class="fa fa-chevron-up"></i>
    </div>
    </div>
    <!-- Body main wrapper end -->
    
    
    
    
    
    

    <!-- Placed js at the end of the document so the pages load faster -->
    <!-- jquery latest version -->
    <script src="{{ Theme::asset('js/vendor/jquery-1.12.0.min.js') }}"></script>
    
    <!-- Bootstrap framework js -->
    <script src="{{ Theme::asset('js/bootstrap.min.js') }}"></script>
    <!-- ajax-mail JS
    ============================================ -->    
    <script src="{{ Theme::asset('js/ajax-mail.js') }}"></script>
    <!-- All js plugins included in this file. -->
    <script type="text/javascript" src="{{ URL::asset('assets/themes/fourthunited/js/plugins.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('assets/themes/fourthunited/js/main.js') }}"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <!-- google map api
    ============================================ -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_qDiT4MyM7IxaGPbQyLnMjVUsJck02N0"></script>
    <script>
        var myCenter=new google.maps.LatLng(30.249796, -97.754667);
        function initialize()
        {
            var mapProp = {
              center:myCenter,
              scrollwheel: false,
              zoom:15,
              mapTypeId:google.maps.MapTypeId.ROADMAP
              };
            var map=new google.maps.Map(document.getElementById("hastech2"),mapProp);
            var marker=new google.maps.Marker({
              position:myCenter,
                animation:google.maps.Animation.BOUNCE,
              icon:'images/logo-icon.png',
                map: map,
              });
            var styles = [
              {
                stylers: [
                  { hue: "#c5c5c5" },
                  { saturation: -100 }
                ]
              },
            ];
            map.setOptions({styles: styles});
            marker.setMap(map);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script> -->

</body>

</html>
