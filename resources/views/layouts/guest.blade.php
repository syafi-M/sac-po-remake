<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Admin Login - PT. Surya Amanah Cendekia</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Font Awesome for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <style>
            body {
                background-color: #f8fafc;
            }

            .admin-card {
                background: white;
                border-radius: 12px;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            }

            .admin-header {
                background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
                border-radius: 12px 12px 0 0;
                padding: 1.5rem;
                text-align: center;
            }

            .form-input {
                transition: all 0.2s ease;
            }

            .form-input:focus {
                border-color: #3b82f6;
                box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            }

            .login-button {
                transition: all 0.2s ease;
            }

            .login-button:hover {
                background-color: #1d4ed8;
            }
        </style>
    </head>
    <body class="flex items-center justify-center min-h-screen p-4 font-sans antialiased text-gray-900">
        <div class="w-full max-w-md">
            <!-- Admin Header -->
            <div class="mb-6 text-white admin-header">
                <div class="flex justify-center mb-4">
                    <div class="p-3 bg-white rounded-full bg-opacity-20">
                        <i class="text-3xl fas fa-user-shield"></i>
                    </div>
                </div>
                <h1 class="text-2xl font-bold">Admin Login</h1>
                <p class="mt-1 text-blue-100">PT. Surya Amanah Cendekia</p>
            </div>

            <!-- Login Form -->
            <div class="p-6 admin-card">
                {{ $slot }}
            </div>

            <!-- Footer -->
            <div class="mt-6 text-sm text-center text-gray-500">
                <p>© {{ date('Y') }} PT. Surya Amanah Cendekia</p>
            </div>
        </div>
    </body>
</html>
