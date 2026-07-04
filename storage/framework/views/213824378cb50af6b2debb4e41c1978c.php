<?php $__env->startSection('title', 'Chi tiết dịch vụ'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-5xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Chi tiết dịch vụ</h1>
            <p class="text-slate-500 mt-1">Quản lý và kiểm tra thông tin chi tiết</p>
        </div>
        <div class="flex gap-2">
            <a href="<?php echo e(route('admin.services.index')); ?>" 
               class="bg-slate-100 hover:bg-slate-200 text-slate-600 px-4 py-2.5 rounded-xl text-sm font-medium transition">
                <i class="fas fa-arrow-left mr-1"></i> Quay lại
            </a>
            
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        
        <div class="p-6 bg-slate-50/50 border-b border-slate-100 flex items-center gap-6">
            <div class="w-20 h-20 flex-shrink-0 bg-white border border-slate-200 rounded-2xl overflow-hidden flex items-center justify-center">
                <?php if($service->image): ?>
                    <img src="<?php echo e(asset('storage/'.$service->image)); ?>" class="w-full h-full object-cover">
                <?php else: ?>
                    <span class="text-3xl">📷</span>
                <?php endif; ?>
            </div>
            <div>
                <span class="px-2.5 py-1 bg-pink-50 text-pink-600 rounded-lg text-xs font-semibold uppercase tracking-wider">
                    <?php echo e($service->category->name ?? 'Chưa phân loại'); ?>

                </span>
                <h2 class="text-xl font-bold text-slate-800 mt-1.5"><?php echo e($service->name); ?></h2>
            </div>
        </div>

        <div class="divide-y divide-slate-100 text-sm">
            
            <div class="grid grid-cols-3 p-4 sm:p-5">
                <div class="text-slate-500 font-medium">Giá dịch vụ</div>
                <div class="col-span-2 font-bold text-emerald-600 text-base">
                    <?php echo e(number_format($service->price)); ?>đ
                </div>
            </div>

            <div class="grid grid-cols-3 p-4 sm:p-5">
                <div class="text-slate-500 font-medium">Thời lượng</div>
                <div class="col-span-2 text-slate-800 font-medium">
                    <?php echo e($service->duration); ?> phút
                </div>
            </div>

            <div class="grid grid-cols-3 p-4 sm:p-5">
                <div class="text-slate-500 font-medium">Số Slot tối đa</div>
                <div class="col-span-2 text-slate-800 font-medium">
                    <?php echo e($service->max_slot); ?> người / ca
                </div>
            </div>

            <div class="grid grid-cols-3 p-4 sm:p-5">
                <div class="text-slate-500 font-medium">Mô tả ngắn</div>
                <div class="col-span-2 text-slate-600 leading-relaxed">
                    <?php echo e($service->short_description ?? '—'); ?>

                </div>
            </div>

            <div class="grid grid-cols-3 p-4 sm:p-5">
                <div class="text-slate-500 font-medium">Mô tả chi tiết</div>
                <div class="col-span-2 text-slate-600 leading-relaxed whitespace-pre-line">
                    <?php if($service->long_description): ?>
                        <?php echo nl2br(e($service->long_description)); ?>

                    <?php else: ?>
                        <span class="text-slate-400 italic">Chưa có nội dung chi tiết.</span>
                    <?php endif; ?>
                </div>
            </div>

            

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/datn6/resources/views/admin/services/show.blade.php ENDPATH**/ ?>