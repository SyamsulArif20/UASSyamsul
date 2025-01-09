<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>

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
            <h1>Halaman Menu Customers</h1>
        </div>
        
        <!-- Button to go back to home -->
        <a href="<?php echo e(route('home')); ?>" class="btn btn-secondary mb-3">Kembali ke Menu Home</a>
        
        <!-- Button to create a new customer -->
        <a href="<?php echo e(route('customers.create')); ?>" class="btn btn-primary mb-3">Create New Customer</a>
        
        <!-- Success message -->
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e(session('success')); ?></p>
            </div>
        <?php endif; ?>
        
        <!-- Customers table -->
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
                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($customer->name); ?></td>
                        <td><?php echo e($customer->email); ?></td>
                        <td><?php echo e($customer->phone); ?></td>
                        <td>
                            <a href="<?php echo e(route('customers.edit', $customer->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                            
                            <form action="<?php echo e(route('customers.destroy', $customer->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this customer?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and Popper.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\syamsuluas\resources\views/customers/index.blade.php ENDPATH**/ ?>