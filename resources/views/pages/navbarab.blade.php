<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        body {
            height: 100vh;
            background-color: #7a522f;
        }

        li {
            list-style: none;

        }

        a {
            text-decoration: none;
            color: #fff;
            font-size: 1rem;

        }

        a:hover {
            color: orange;
        }

        header {
            position: relative;
            padding: 0 2rem;
        }

        .navbar {
            width: 100%;
            height: 60px;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar .logo a {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar .links {
            display: flex;
            gap: 2rem;
        }

        .navbar .toggle_btn {
            color: #fff;
            font-size: 1.5rem;
            cursor: pointer;
            display: none;
        }


        .action_btn {
            background-color: orange;
            color: #fff;
            padding: 0.5rem 1rem;
            border: 0;
            outline: 0;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
            cursor: pointer;
            transition: scale 0.2 ease;
        }

        .action_btn:hover {
            scale: 1.05;
            color: #fff;
        }

        .action_btn:active {
            scale: 0.95;
        }

        /* DROPDOWN MENU */
        .dropdown-menu {
            display: none;
            position:   absolute;
            right: 2rem;
            top: 60px;
            height: 0;
            width: 300px;
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border-radius: 10px;
            overflow: hidden;
            transition: height 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .dropdown-menu.open {
            height: 240px;
        }

        .dropdown-menu li {
            padding: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .dropdown-menu .action_btn {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        /* RESPONSIVE */
        @media(max-width: 992px) {

            .navbar .links,
            .navbar .action_btn {
                display: none;
            }

            .navbar .toggle_btn {
                display: block;
            }

            .dropdown-menu {
                display: block;
            }
        }

        @media(max-width: 576px) {
            .dropdown-menu {
                left: 2rem;
                width: unset;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="">Testing</a></div>
            <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Services</a></li>
            </ul>

            <a href="" class="action_btn">Get Started</a>
            <div class="toggle_btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div class="dropdown-menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="" class="action_btn">Get Started</a></li>
        </div>
    </header>

    <script>
        const toggleBtn = document.querySelector('.toggle_btn');
        const toggleBtnIcon = document.querySelector('.toggle_btn i');
        const dropDown = document.querySelector('.dropdown-menu');

        toggleBtn.onclick = function() {
            dropDown.classList.toggle('open');
            const isOpen = dropDown.classList.contains('open');

            toggleBtnIcon.classList = isOpen
                ? 'fas fa-xmark'
                : 'fas fa-bars';
        }
    </script>

</body>

</html>
