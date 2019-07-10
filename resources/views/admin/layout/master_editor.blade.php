<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <base href="{{asset('')}}">
  <title>@yield('title')</title>

  <!-- Custom fonts for this template-->
  <link href="/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/backend/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/backend/css/custom.css">
  @yield('css')

</head>

<body id="page-top">
<div id="wrapper">
    @include('admin.partial.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('admin.partial.nav')
                @yield('content')
            </div>
            @include('admin.partial.footer')
        </div>
</div>
@yield('modal')

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="/backend/vendor/jquery/jquery.min.js"></script>
    <script src="/backend/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/backend/vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="/backend/jquery-ui-1.12.1/jquery-ui.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/backend/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/backend/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" charset="utf-8">
        baseUrl = "{{URL::to('/')}}";
        roxyFileman = '/backend/fileman/index.html?integration=ckeditor';
        options = {
                removeDialogTabs: 'link:upload;image:Upload',
                filebrowserBrowseUrl:roxyFileman,
                filebrowserUploadUrl:roxyFileman,
                filebrowserImageBrowseUrl:roxyFileman+'&type=image'
        };
        function openCustomRoxy(){
          $('#roxyCustomPanel').dialog({modal:true, width:875,height:600});
        }
        function closeCustomRoxy(){
          $('#roxyCustomPanel').dialog('close');
        }

        $(function(){
          CKEDITOR.replace( 'content_vi', options);
          CKEDITOR.replace( 'content_en', options);
        });
    </script>
    @yield('script')
</body>
</html>