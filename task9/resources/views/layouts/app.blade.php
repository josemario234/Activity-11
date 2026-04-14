<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header{
            background-color: #333;
            color: #fff;
            padding: 16px 0;
        }
        nav{
            width:80%;
            margin: 0 auto;
        }
        nav ul{
            list-style: none;
            display: flex;
            justify-content: center;
            padding: 0;
            margin: 0;
        }
        nav li{
            margin: 0 12px;
        }
        nav a{
            color: #fff;
            text-decoration: none;
            padding: 8px 12px;
            display: inline-block;
            border-radius: 4px;
        }
        nav .active a{
            background: #ff8c00;
            font-weight: bold;
        }
        main{
            width: 80%;
            margin: 32px auto;
            background-color: #fff;
            padding: 24px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        footer{
            width: 80%;
            margin: 0 auto 32px;
            padding: 16px;
            text-align: center;
            color: #555;
            font-size: 0.95rem;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                @foreach($menu as $label => $url)
                    <li class="{{ ($active ?? '') === $label ? 'active' : '' }}">
                        <a href="{{ $url }}">{{ $label }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
        <p>Task9 made by: [Jose Mario Mancillas Ayala] | This are the same menus from Activity 11, Check out the GitHub project.</p>
    </footer>
</body>
</html>