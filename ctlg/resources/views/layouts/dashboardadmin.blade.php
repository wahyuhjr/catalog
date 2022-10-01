<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link rel="shortcut icon" href="{{  asset ('assets/img/icons/icon-48x48.png')  }}" /> -->

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Catalog</title>
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/js/app.js') -->
    <link href="{{  asset ('assets/css/app.css')  }}" rel="stylesheet">
    <link href="{{  asset ('assets/css/dashboard.css')  }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{  asset('assets/css/trix.css')  }}">
    <script type="text/javascript" src="{{ asset ('assets/tinymce/tinymce.min.js')  }}"></script>
    <script type="text/javascript" src="{{ asset ('assets/tinymce/tinymce.js')  }}"></script>
    <script type="text/javascript" src="{{ asset ('ckeditor/ckeditor.js')  }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        @include('layouts.navdash')
        @yield('content')

    </div>
    </div>

    <script src="{{  asset ('assets/js/app.js')  }}"></script>
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    tinymce.init({
    selector: '#myTextarea',
    width: 600,
    height: 300,
});
</script>
</body>

</html>