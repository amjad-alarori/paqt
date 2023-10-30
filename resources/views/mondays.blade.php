<!DOCTYPE html>
<html>
<head>
    <title>Full Weeks with Mondays in a Period</title>
</head>
<body>
<h1>Calculate Full Weeks with Mondays in a Period</h1>
<form action="{{ route('mondays') }}" method="GET">
    @csrf
    <label for="start_date">Start Date:</label>
    <input type="date" name="start_date" required>
    <br>
    <label for="end_date">End Date:</label>
    <input type="date" name="end_date" required>
    <br>
    <button type="submit">Calculate Full Weeks with Mondays</button>
</form>

@if(isset($mondays))
    <h2>Full Weeks with Mondays:</h2>
    <ul>
        @foreach ($mondays as $monday)
            <li>{{ $monday['date'] }} (Week {{ $monday['week_number'] }})</li>
        @endforeach
    </ul>
@endif
</body>
</html>
