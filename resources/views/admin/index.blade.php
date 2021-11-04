<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Administrator</title>
    <link href="{{ asset('img/logo.png') }}" rel="icon">
    <link href="{{ asset('img/logo.png') }}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="{{ asset('js/main.js') }}"></script>
</head>
<body>
    <div class="container" style="margin-top: 50px;">
        <form action="/admin/post/create" method="post" class="form-group" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <input type="text" class="form-control" name="post_title" id="post_title" placeholder="Post Title"> <br>
                    <textarea name="post_description" class="form-control" id="post_description" cols="30" rows="10" placeholder="Post description"></textarea> <br>
                    <input type="file" class="form-control" name="post_image" id="post_image"><br>

                    <button type="submit" class="btn btn-primary btn-lg">Post</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>