<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drivers</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .title-box {
            background-color: #FFA500; /* Warna oranye */
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="title-box mb-4">
            <h1>Halaman Menu Drivers</h1>
        </div>
        
        <!-- Button to go back to home -->
        <a href="{{ route('home') }}" class="btn btn-secondary mb-3">Kembali ke Menu Home</a>
        
        <!-- Button to create a new driver -->
        <a href="{{ route('drivers.create') }}" class="btn btn-primary mb-3">Create New Driver</a>
        
        <!-- Success message -->
        @if (session('success'))
            <div class="alert alert-success">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        
        <!-- Drivers table -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($drivers as $driver)
                    <tr>
                        <td>{{ $driver->name }}</td>
                        <td>{{ $driver->email }}</td>
                        <td>{{ $driver->phone }}</td>
                        <td>
                            <a href="{{ route('drivers.edit', $driver->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            
                            <form action="{{ route('drivers.destroy', $driver->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this driver?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and Popper.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
