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
        <a href="<?php echo e(route('home')); ?>" class="btn btn-secondary mb-3">Kembali ke Menu Home</a>
        
        <!-- Button to create a new branch -->
        <a href="<?php echo e(route('branches.create')); ?>" class="btn btn-primary mb-3">Create New Branch</a>

        <!-- Success message -->
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e(session('success')); ?></p>
            </div>
        <?php endif; ?>

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
                <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($branch->name); ?></td>
                        <td><?php echo e($branch->location); ?></td>
                        <td>
                            <a href="<?php echo e(route('branches.edit', $branch->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="<?php echo e(route('branches.destroy', $branch->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this branch?');">Delete</button>
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
</html>
<?php /**PATH C:\xampp\htdocs\syamsuluas\resources\views/branches/index.blade.php ENDPATH**/ ?>