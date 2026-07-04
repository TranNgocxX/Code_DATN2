<?php $__env->startSection('title', 'Danh sách nhân viên'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Danh sách nhân viên</h1>
            <p class="text-slate-500 mt-1">Quản lý đội ngũ nhân viên Spa</p>
        </div>
        <a href="<?php echo e(route('admin.employees.create')); ?>" 
           class="bg-pink-600 hover:bg-pink-700 text-white px-5 py-3 rounded-xl flex items-center gap-2 font-medium transition shadow-lg shadow-pink-500/30">
            <i class="fas fa-plus"></i>
            Thêm nhân viên mới
        </a>
    </div>

    <div class="mb-6 flex items-center justify-between gap-4"> 
        <form action="<?php echo e(route('admin.employees.index')); ?>" method="GET" class="relative w-full max-w-md">
            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                <i class="fas fa-search text-slate-400 text-sm"></i>
            </div>

            <input
                type="text" name="keyword" value="<?php echo e(request('keyword')); ?>" placeholder="Tìm kiếm nhân viên..."
                class="w-full pl-11 pr-24 py-3 border border-slate-200 rounded-2xl bg-white text-sm text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition"
            >

            <?php if(request('keyword')): ?>
                <a href="<?php echo e(route('admin.employees.index')); ?>"
                class="absolute right-3 top-1/2 -translate-y-1/2 text-sm text-slate-400 hover:text-red-500 transition">
                    Xóa
                </a>
            <?php endif; ?>

        </form> 
    </div>

    <div class="bg-white rounded-3xl shadow-sm overflow-hidden">
        <table class="w-full">
            <thead>
                <tr class="border-b border-slate-200 bg-slate-50">
                    <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Tên nhân viên</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Số điện thoại</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Dịch vụ phụ trách</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold text-slate-500 uppercase tracking-wider w-44">Hành động</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-5 font-medium text-slate-800"><?php echo e($employee->id); ?></td>
                    <td class="px-6 py-5 font-medium text-slate-800"><?php echo e($employee->name); ?></td>
                    <td class="px-6 py-5 text-slate-600"><?php echo e($employee->phone); ?></td>
                    <td class="px-6 py-5 text-slate-600"><?php echo e($employee->email); ?></td>
                    <td class="px-6 py-5">
                        <?php if($employee->services->count() > 0): ?>
                            <div class="flex flex-wrap gap-2">
                                <?php $__currentLoopData = $employee->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="inline-block px-3 py-1 text-xs font-medium bg-pink-100 text-pink-700 rounded-2xl">
                                        <?php echo e($service->name); ?>

                                    </span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php else: ?>
                            <span class="text-slate-400 text-sm italic">Chưa phân công dịch vụ</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-6 py-5">
                        <div class="flex items-center justify-center gap-2">
                            <a href="<?php echo e(route('admin.employees.edit', $employee)); ?>" 
                               class="flex items-center justify-center w-9 h-9 bg-amber-100 hover:bg-amber-200 text-amber-600 rounded-2xl transition">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="<?php echo e(route('admin.employees.destroy', $employee)); ?>" method="POST" class="inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button onclick="return confirm('Bạn có chắc muốn xóa nhân viên này?')" 
                                        class="flex items-center justify-center w-9 h-9 bg-red-100 hover:bg-red-200 text-red-600 rounded-2xl transition">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <?php if($employees->hasPages()): ?>
            <div class="px-6 py-5 border-t">
                <?php echo e($employees->links('pagination::tailwind')); ?>

            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/datn6/resources/views/admin/employees/index.blade.php ENDPATH**/ ?>