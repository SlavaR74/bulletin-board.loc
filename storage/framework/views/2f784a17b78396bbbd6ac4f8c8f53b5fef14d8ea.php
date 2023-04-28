
<?php $__env->startSection('title', 'Главная'); ?>
<?php $__env->startSection('main'); ?>
        <?php if(count($bbs) > 0): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Товар</th>
                    <th>Цена, руб.</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $bbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <h3><?php echo e($bb->title); ?></h3>
                    </td>
                    <td><?php echo e($bb->price); ?></td>
                    <td>
                        <a href="<?php echo e(route('detail', ['bb' => $bb->id])); ?>">Подробнее...</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php endif; ?>
        <?php $__env->stopSection(); ?>
    </div>
</body>

</html>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\work\projects\bboard\resources\views/index.blade.php ENDPATH**/ ?>