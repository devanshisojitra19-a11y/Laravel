<?php $__env->startSection('title', 'Contact Us Messages'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header bg-white py-3">
        <h5 class="mb-0 fw-bold">Inquiries</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="text-nowrap"><?php echo e($contact->created_at->format('M d, Y H:i')); ?></td>
                        <td class="fw-bold"><?php echo e($contact->name); ?></td>
                        <td><?php echo e($contact->email); ?></td>
                        <td><?php echo e($contact->subject); ?></td>
                        <td>
                            <div style="max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" title="<?php echo e($contact->message); ?>">
                                <?php echo e($contact->message); ?>

                            </div>
                        </td>
                        <td>
                            <form action="<?php echo e(route('admin.contact-us.destroy', $contact)); ?>" method="POST" onsubmit="return confirm('Are you sure?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-delete">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="text-center py-4 text-muted">No data available</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/laravel-implementation/resources/views/admin/contact/index.blade.php ENDPATH**/ ?>