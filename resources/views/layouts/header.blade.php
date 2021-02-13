<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Rony Kumar">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=on">

    <title>Admin Panel</title>

    <!--CSS LINK -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/responsive.css')}}">

    <style type="text/css">
        .admin-nav{
            width: 220px;
            min-height: 100vh;
            overflow: hidden;
            background-color: #343a40;
            transition: 0.3s all ease-in-out;
        }
        .admin-link{
            background-color: #343a40;
        }
        .admin-link:hover, .nav-active{
            background-color: #212529;
            text-decoration: none;
        }
        .animate{
            width: 0;
            transition: 0.3s all ease-in-out;
        }
    </style>
</head>
<body>

@include('layouts.sidenav')
@include('layouts.topnav')
{{--<?php	require_once 'admin-sidenavbar.php'; ?>--}}
{{--<?php	require_once 'admin-topnavbar.php'; ?>--}}
