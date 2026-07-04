<?php $__env->startSection('title', 'Thêm danh mụcmới'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-4xl mx-auto">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-slate-800">Thêm mới</h1>
        <p class="text-slate-500">Tạo danh mục dịch vụ cho hệ thống Spa</p>
    </div>

    <div class="bg-white rounded-3xl shadow-sm p-8">
        <form action="<?php echo e(route('admin.categories.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="mb-6">
                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    Tên danh mục <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                       name="name" 
                       value="<?php echo e(old('name')); ?>"
                       class="w-full px-5 py-4 border rounded-2xl focus:outline-none transition 
                       <?php echo e($errors->has('name') ? 'border-red-500 focus:ring-4 focus:ring-red-100' : 'border-slate-200 focus:border-pink-300 focus:ring-4 focus:ring-pink-100'); ?>"
                       placeholder="Ví dụ: Massage thư giãn">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-1 text-red-500 text-sm"> <?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-8">
                <label class="block text-sm font-semibold text-slate-700 mb-2">Mô tả</label>
                <textarea name="description" 
                          rows="5"
                          class="w-full px-5 py-4 border border-slate-200 rounded-2xl focus:outline-none focus:border-pink-300 focus:ring-4 focus:ring-pink-100 transition"
                          placeholder="Mô tả chi tiết về danh mục..."><?php echo e(old('description')); ?></textarea>
            </div>

            <div class="flex gap-4">
                <a href="<?php echo e(route('admin.categories.index')); ?>" 
                   class="flex-1 text-center py-4 border border-slate-300 hover:border-slate-400 rounded-2xl font-medium text-slate-600 transition">
                    Quay lại
                </a>
                <button type="submit" 
                        class="flex-1 bg-pink-600 hover:bg-pink-700 text-white py-4 rounded-2xl font-semibold transition shadow-lg shadow-pink-500/30">
                    <i class="fas fa-save mr-2"></i>
                    Lưu
                </button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/datn6/resources/views/admin/categories/create.blade.php ENDPATH**/ ?>