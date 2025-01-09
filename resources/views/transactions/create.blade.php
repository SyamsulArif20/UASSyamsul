<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Transaction</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-container h1 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="container mt-5 form-container">
        <h1>Create Transaction</h1>
        
        <form action="{{ route('transactions.store') }}" method="POST">
            @csrf

            <!-- Customer Dropdown -->
            <div class="mb-3">
                <label for="customer_id" class="form-label">Customer:</label>
                <select name="customer_id" id="customer_id" class="form-select" required>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Package Dropdown -->
            <div class="mb-3">
                <label for="package_id" class="form-label">Package:</label>
                <select name="package_id" id="package_id" class="form-select" required>
                    @foreach ($packages as $package)
                        <option value="{{ $package->id }}">{{ $package->description }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Driver Dropdown -->
            <div class="mb-3">
                <label for="driver_id" class="form-label">Driver:</label>
                <select name="driver_id" id="driver_id" class="form-select" required>
                    @foreach ($drivers as $driver)
                        <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Branch Dropdown -->
            <div class="mb-3">
                <label for="branch_id" class="form-label">Branch:</label>
                <select name="branch_id" id="branch_id" class="form-select" required>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">Create Transaction</button>
        </form>

        <a href="{{ route('transactions.index') }}" class="btn btn-secondary mt-3 w-100">Back to Transaction List</a>
    </div>

    <!-- Bootstrap JS and Popper.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
