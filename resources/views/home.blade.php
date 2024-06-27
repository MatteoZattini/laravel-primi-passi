<?php use \app\Http\Controllers\homeController; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>home page</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user['name'] }} 
                {{ $user['age'] }}
                @if ($user['age'] < 30)
                    {{ $user['name'] }} è giovane {{ date('Y') }}
                    @else 
                    {{ $user['name'] }} è vecchio {{ date('Y') }}
                @endif
            </li>
            
        @endforeach
    </ul>
    <a href="/">Welcome</a>
</body>
</html>