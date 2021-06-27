<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Student Portal</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">
    <link href="{{ asset('img/favicon.png') }}" rel="icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      a {
          text-decoration: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/profile/view.css') }}">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

    <link href="{{ asset('css/profile/edit.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components/chips.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components/comments.css') }}" rel="stylesheet">

  </head>
  <body>

<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1 d-flex">
        <img src="https://img.icons8.com/material-outlined/40/000000/menu--v1.png"/>
        <input class="w-100 form-control mx-4" type="text" name="search" id="search" placeholder="search">
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="{{ route('home') }}">Student Portal</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="btn btn-outline-success me-3" href="{{route('registration.index')}}">Register</a>
        <a class="btn btn-outline-primary me-3" href="/login">Login</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="#">Math</a>
      <a class="p-2 link-secondary" href="#">Physics</a>
      <a class="p-2 link-secondary" href="#">Chemistry</a>
      <a class="p-2 link-secondary" href="#">Biology</a>
      <a class="p-2 link-secondary" href="#">Progamming</a>
      <a class="p-2 link-secondary" href="#">Networking</a>
      <a class="p-2 link-secondary" href="#">Language</a>
      <a class="p-2 link-secondary" href="#">Exam Preperation</a>
    </nav>
  </div>
</div>
