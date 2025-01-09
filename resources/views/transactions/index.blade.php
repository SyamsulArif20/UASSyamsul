<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>

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
            <h1>Halaman Menu Transactions</h1>
        </div>
        
        <!-- Button to go back to home -->
        <a href="{{ route('home') }}" class="btn btn-secondary mb-3">Kembali ke Menu Home</a>
        
        <!-- Button to create a new transaction -->
        <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">Create New Transaction</a>
        
        <!-- Success message -->
        @if (session('success'))
            <div class="alert alert-success">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        
        <!-- Transactions table -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Package Description</th>
                    <th>Driver Name</th>
                    <th>Branch Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->customer->name }}</td>
                        <td>{{ $transaction->package->description }}</td>
                        <td>{{ $transaction->driver->name }}</td>
                        <td>{{ $transaction->branch->name }}</td>
                        <td>
                            <a href="{{ route('transactions.edit', $transaction->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            
                            <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this transaction?');">Delete</button>
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
