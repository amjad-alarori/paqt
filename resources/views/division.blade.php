<!DOCTYPE html>
<html>
<head>
    <title>Collection Division</title>
</head>
<body>
@foreach ($result as $chunk)
    <ul>
        @foreach ($chunk as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
@endforeach
</body>
</html>
