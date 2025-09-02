<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>System University</title>
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <style>
        .navbar-custom {
            background: #fff; 
        }
        .navbar-brand {
            font-size: 1.4rem;
            color: #0d6efd !important; 
        }
        .nav-link {
            font-weight: 500;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 6px;
            color: #333 !important; 
        }
        .nav-link:hover {
            color: #0d6efd !important; 
            transform: translateY(-2px);
        }
        .btn-auth {
            font-weight: 600;
            border-radius: 20px;
            padding: 6px 18px;
        }
    </style>
</head>
<body class="antialiased">