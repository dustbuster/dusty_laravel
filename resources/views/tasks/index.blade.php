<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>
        @foreach($tasks as $task)

        <li>
            <a href='/tasks/{{ $task->id }}'>
                {{ $task->body }}
            </a>
        </li>
        
        @endforeach
    </h1>
</body>
</html>

