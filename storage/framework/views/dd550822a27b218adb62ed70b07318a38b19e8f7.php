
<?php $__env->startSection('title', 'Правка объявления :: Мои объявления'); ?>
<?php $__env->startSection('main'); ?>
<form action="<?php echo e(route('bb.update', ['bb' => $bb->id])); ?>" method="POST">
<?php echo csrf_field(); ?>
<?php echo method_field('PATCH'); ?>
<div class="form-group">
<label for="txtTitle">Товар</label>
<input name="title" id="txtTitle" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('title', $bb->title)); ?>">
<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<span class="invalid-feedback">
<strong><?php echo e($message); ?></strong>
</span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<div class="form-group">
<label for="txtContent">Описание</label>
<textarea name="content" id="txtContent" class="form-control"
row="3"><?php echo e($bb->content); ?></textarea>
</div>
<div class="form-group">
<label for="txtPrice">Цена</label>
<input name="price" id="txtPrice" class="form-control" value="<?php echo e($bb->price); ?>">
</div>
<input type="submit" class="btn btn-primary" value="Сохранить">
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\work\projects\bboard\resources\views/bb_edit.blade.php ENDPATH**/ ?>