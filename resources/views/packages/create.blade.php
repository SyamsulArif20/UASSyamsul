<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Package</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Heading with background color -->
        <div class="bg-warning p-3 rounded mb-4">
            <h1 class="mb-0">Create Package</h1>
        </div>

        <!-- Back to Package List button -->
        <a href="{{ route('packages.index') }}" class="btn btn-secondary mb-3">Back to Package List</a>

        <!-- Create Package Form -->
        <form action="{{ route('packages.store') }}" method="POST">
            @csrf

            <!-- Description input -->
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>

            <!-- Weight input -->
            <div class="mb-3">
                <label for="weight" class="form-label">Weight:</label>
                <input type="number" name="weight" id="weight" class="form-control" step="0.01" required>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-success">Create Package</button>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
