<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Quiz Admin</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <!-- CSS for admin dashboard -->
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">
    <!-- jQuery-->
    <script src="{{ asset('js/jquery.js') }}"></script>
</head>
<body> 
  <div class="container-for-admin">
  <!--Main Navigation-->
    <header>
    <!-- Navbar -->
      @include('admin.layouts.navbar') 
      <!-- Navbar -->
      <!-- Sidebar -->
      @include('admin.layouts.left_menu')
      <!-- Sidebar -->
    </header>

    