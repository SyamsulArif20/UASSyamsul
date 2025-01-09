<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branches</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Title with Orange Box -->
        <div class="bg-warning text-white p-3 mb-3">
            <h1 class="mb-0">Menu Cabang</h1>
        </div>

        <!-- Button to go back to home -->
        <a href="{{ route('home') }}" class="btn btn-secondary mb-3">Kembali ke Menu Home</a>
        
        <!-- Button to create a new branch -->
        <a href="{{ route('branches.create') }}" class="btn btn-primary mb-3">Create New Branch</a>

        <!-- Success message -->
        @if (session('success'))
            <div class="alert alert-success">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <!-- Branches table -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($branches as $branch)
                    <tr>
                        <td>{{ $branch->name }}</td>
                        <td>{{ $branch->location }}</td>
                        <td>
                            <a href="{{ route('branches.edit', $branch->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('branches.destroy', $branch->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this branch?');">Delete</button>
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
