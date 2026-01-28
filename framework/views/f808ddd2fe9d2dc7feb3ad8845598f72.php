<?php $__env->startSection('title', 'Settings - Find A Doctor'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h5 class="mb-0 fw-bold">Manage Doctors</h5>
        <a href="<?php echo e(route('admin.doctors.create')); ?>" class="btn btn-primary btn-sm">
            <i class="bi bi-plus-circle"></i> Add Doctor
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Specialty</th>
                        <th>Experience</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td>
                            <img src="<?php echo e(asset($doctor->image)); ?>" alt="" class="rounded-circle" width="40" height="40" style="object-fit: cover;">
                        </td>
                        <td>
                            <div class="fw-bold"><?php echo e($doctor->name); ?></div>
                            <small class="text-muted"><?php echo e($doctor->credentials); ?></small>
                        </td>
                        <td><?php echo e($doctor->specialty); ?></td>
                        <td><?php echo e($doctor->experience); ?></td>
                        <td>
                            <span class="badge bg-warning text-dark">
                                <i class="bi bi-star-fill"></i> <?php echo e($doctor->rating); ?>

                            </span>
                        </td>
                        <td>
                            <?php if($doctor->status == 'active'): ?>
                                <span class="badge bg-success">Active</span>
                            <?php elseif($doctor->status == 'busy'): ?>
                                <span class="badge bg-danger">Busy</span>
                            <?php else: ?>
                                <span class="badge bg-secondary">Offline</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="<?php echo e(route('admin.doctors.edit', $doctor)); ?>" class="btn btn-sm btn-edit me-2">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="<?php echo e(route('admin.doctors.destroy', $doctor)); ?>" method="POST" onsubmit="return confirm('Are you sure?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-delete">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="7" class="text-center py-4 text-muted">No data available</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/laravel-implementation/resources/views/admin/settings/index.blade.php ENDPATH**/ ?>