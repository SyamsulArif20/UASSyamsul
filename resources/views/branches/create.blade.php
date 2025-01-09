<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Branch</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Create Branch</h1>

        <!-- Form to create branch -->
        <form action="{{ route('branches.store') }}" method="POST">
            @csrf

            <!-- Branch Name field -->
            <div class="mb-3">
                <label for="name" class="form-label">Branch Name:</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>

            <!-- Location field -->
            <div class="mb-3">
                <label for="location" class="form-label">Location:</label>
                <input type="text" class="form-control" name="location" id="location" required>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary">Create Branch</button>
        </form>

        <!-- Back to branch list -->
        <a href="{{ route('branches.index') }}" class="btn btn-secondary mt-3">Back to Branch List</a>
    </div>

    <!-- Bootstrap JS and Popper.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>