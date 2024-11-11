{{-- <x-app-layout> --}}
 {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
    <!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #cecece;
            padding-top: 20px;
        }
        .main-content {
            margin-left: 220px;
            padding: 20px;
        }
        .card {
            width: 150px;
            text-align: center;
            background-color: #00bfff;
            color: white;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="text-center">
                <img src="logo.png" alt="Logo" style="width: 80px; height: 80px; border-radius: 50%;">
            </div>
            <nav class="nav flex-column mt-4">
                <a class="nav-link active" href="#">Dashboard</a>
                <a class="nav-link" href="#">Master Pengguna</a>
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </nav>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <h1>Dashboard</h1>
            <div class="d-flex gap-4 mt-4">
                <!-- Card Pengguna Terdaftar -->
                <div class="card">
                    {{-- <h2>{{ $totalUsers }}</h2> --}}
                    <p>PENGGUNA TERDAFTAR</p>
                </div>
                <!-- Card Pengguna Aktif -->
                <div class="card">
                    {{-- <h2>{{ $activeUsers }}</ --}}

{{-- </x-app-layout> --}}
