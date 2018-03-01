<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <body>
        <div class="content">
            <div class="title m-b-md">
                <ul>
                    @foreach ($tasks as $tasks)
                        <li>{{ $tasks->body }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </body>
</html>
