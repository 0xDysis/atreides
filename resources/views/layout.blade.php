<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Default Title')</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Helvetica, sans-serif;
        }

        #stickyNavbar {
            position: fixed;
            top: 10px; /* 10px margin from the top */
            left: 50%;
            width: 60%; /* 60% width of the screen */
            transform: translateX(-50%);
            background-color: #F8F9FA; /* Subtle off-white color */
            border-radius: 5px; /* 5px border-radius */
            z-index: 1000;
            box-shadow: 0px 0px 9px rgba(0, 0, 0, 0.1); /* 9px drop shadow uniformly around the navbar */
        }

        #stickyNavbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 50px;
        }

        #stickyNavbar li {
            display: inline;
        }

        #stickyNavbar a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        #stickyNavbar a:hover {
            color: #007bff;
        }

        .content {
            width: 100%; /* Takes up the full width of the screen */
            margin-top: 60px; /* Adjust this value to create space for the navbar */
            padding: 20px; /* Adds some space around the content */
        }
    </style>
</head>
<body>
    <nav id="stickyNavbar">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <!-- Add more links here -->
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>





