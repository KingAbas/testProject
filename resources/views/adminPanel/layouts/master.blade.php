<!DOCTYPE html>
<html lang="fa">
<head>
    <title>admin-1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <link href="{{asset('style/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/bootstrap-reset.css')}}" rel="stylesheet">
    <link href="{{asset('style/fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('style/plugin/ssi-uploader/ssi-uploader.css')}}" rel="stylesheet">
    <link href="{{asset('style/plugin/selectric/selectric.css')}}" rel="stylesheet">
    <link href="{{asset('style/plugin/jquery.vswitch/vswitch.css')}}" rel="stylesheet">
    <link href="{{asset('style/plugin/Custom-File-Input/file-upload.css')}}" rel="stylesheet">
    <link href="{{asset('style/plugin/persiandatepicker/persianDatepicker-default.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/style-responsive.css')}}" rel="stylesheet">
</head>
<body class="mobile-sidebar">

@yield('masterBody')


<!-- JavaScript -->
<script src="{{asset('style/js/jquery-1.8.3.min.js')}}"></script>
<script src="{{asset('style/js/bootstrap.min.js')}}"></script>
<script src="{{asset('style/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('style/plugin/scrolling-animation/scrolling-animation.js')}}"></script>
<script src="{{asset('style/plugin/ssi-uploader/ssi-uploader.min.js')}}"></script>
<script src="{{asset('style/plugin/selectric/jquery.selectric.min.js')}}"></script>
<script src="{{asset('style/plugin/uploadPreview/uploadPreview.min.js')}}"></script>
<link href="{{asset('style/plugin/jquery.vswitch/vswitch.css')}}" rel="stylesheet">
<script src="{{asset('style/plugin/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('style/plugin/jquery.vswitch/jquery.vswitch.min.js')}}"></script>
<script src="{{asset('style/js/script.js')}}"></script>
<script type="text/javascript">
    (function ($) {
        $(document).ready(function () {
            var examples = [
                {element: '.privacy', code: "$('.privacy input[type=\"checkbox\"]').vSwitch();"}
            ];
            $.each(examples, function (i, val) {
                eval(val.code);
                $(val.element + ' code').html(val.code.replace(/\n/g, "<br/>"));
            });
        });
    })(jQuery);
</script>
<script type="text/javascript">
    (function ($) {
        $(document).ready(function () {
            var examples = [
                {element: '.pro-green-md', code: "$('.pro-green-md input[type=\"checkbox\"]').vSwitch();"},
                {element: '.respro', code: "$('.respro input[type=\"checkbox\"]').vSwitch();"},
                {element: '.pro-green', code: "$('.pro-green input[type=\"checkbox\"]').vSwitch();"}
            ];
            $.each(examples, function (i, val) {
                eval(val.code);
                $(val.element + ' code').html(val.code.replace(/\n/g, "<br/>"));
            });
        });
    })(jQuery);
</script>

<!-- JavaScript -->

</body>
</html>