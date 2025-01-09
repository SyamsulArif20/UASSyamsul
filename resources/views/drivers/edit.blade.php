<!DOCTYPE html>
<html>
<head>
    <title>Edit Driver</title>
</head>
<body>
    <h1>Edit Driver</h1>
    <form action="{{ route('drivers.update', $driver->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $driver->name }}" required>

        <label for="license_number">License Number:</label>
        <input type="text" name="license_number" id="license_number" value="{{ $driver->license_number }}" required>

        <button type="submit">Update Driver</button>
    </form>

    <a href="{{ route('drivers.index') }}">Back to Driver List</a>
</body>
</html>