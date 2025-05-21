<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('storage/images/service/logo-symply.svg') }}">
    <title>404 - Page Not Found</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #583d1e, #ae7431);
            font-family: 'Arial', sans-serif;
            color: #fff;
            overflow: hidden;
        }

        .container {
            text-align: center;
            padding: 20px;
        }

        .error-code {
            font-size: 120px;
            font-weight: bold;
            margin: 0;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
            animation: pulse 2s infinite;
        }

        .message {
            font-size: 24px;
            margin: 20px 0;
        }

        .sub-message {
            font-size: 18px;
            margin-bottom: 30px;
            opacity: 0.8;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #ff6f61;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #e55a50;
        }

        .astronaut {
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translateX(-50%);
            width: 150px;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        @keyframes float {
            0% { transform: translate(-50%, 0); }
            50% { transform: translate(-50%, 20px); }
            100% { transform: translate(-50%, 0); }
        }

        @media (max-width: 600px) {
            .error-code {
                font-size: 80px;
            }
            .message {
                font-size: 20px;
            }
            .sub-message {
                font-size: 16px;
            }
            .astronaut {
                width: 100px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="error-code">404</h1>
        <p class="message">Oops! Halaman tidak ditemukan</p>
        <a href="{{ url('/') }}" class="btn">Kembali ke Beranda</a>
    </div>
</body>
</html>
