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
        
        <form action="<?php echo e(route('transactions.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <!-- Customer Dropdown -->
            <div class="mb-3">
                <label for="customer_id" class="form-label">Customer:</label>
                <select name="customer_id" id="customer_id" class="form-select" required>
                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <!-- Package Dropdown -->
            <div class="mb-3">
                <label for="package_id" class="form-label">Package:</label>
                <select name="package_id" id="package_id" class="form-select" required>
                    <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($package->id); ?>"><?php echo e($package->description); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <!-- Driver Dropdown -->
            <div class="mb-3">
                <label for="driver_id" class="form-label">Driver:</label>
                <select name="driver_id" id="driver_id" class="form-select" required>
                    <?php $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($driver->id); ?>"><?php echo e($driver->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <!-- Branch Dropdown -->
            <div class="mb-3">
                <label for="branch_id" class="form-label">Branch:</label>
                <select name="branch_id" id="branch_id" class="form-select" required>
                    <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($branch->id); ?>"><?php echo e($branch->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">Create Transaction</button>
        </form>

        <a href="<?php echo e(route('transactions.index')); ?>" class="btn btn-secondary mt-3 w-100">Back to Transaction List</a>
    </div>

    <!-- Bootstrap JS and Popper.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\User\syamsuluas\resources\views/transactions/create.blade.php ENDPATH**/ ?>