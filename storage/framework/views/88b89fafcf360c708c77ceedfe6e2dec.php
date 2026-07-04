<?php $__env->startSection('title', 'Quản lý lịch hẹn'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Quản lý lịch hẹn</h1>
            <p class="text-slate-500 mt-1">Theo dõi và xử lý các lịch đặt Spa</p>
        </div>
    </div>

    <div class="bg-white rounded-3xl shadow-sm p-6 mb-8 border border-slate-100">
        <form method="GET" action="<?php echo e(route('admin.appointments.index')); ?>" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 items-end">
            
            
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Từ khóa dịch vụ</label>
                <input type="text" name="keyword" value="<?php echo e(request('keyword')); ?>" placeholder="Nhập tên dịch vụ..."
                    class="w-full px-4 py-3 border border-slate-200 rounded-2xl text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-transparent transition">
            </div>

            
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Khách hàng</label>
                <input type="text" name="customer_name" value="<?php echo e(request('customer_name')); ?>" placeholder="Nhập tên khách hàng..."
                    class="w-full px-4 py-3 border border-slate-200 rounded-2xl text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-transparent transition">
            </div>

            
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Ngày hẹn</label>
                <input type="date" name="date" value="<?php echo e(request('date')); ?>" 
                    class="w-full px-4 py-3 border border-slate-200 rounded-2xl text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-transparent transition cursor-pointer">
            </div>

            
            <div class="relative">
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Nhân viên</label>
                <select name="employee_id" class="w-full pl-4 pr-10 py-3 border border-slate-200 rounded-2xl text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-transparent transition cursor-pointer appearance-none bg-white">
                    <option value="">Tất cả nhân viên</option>
                    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($employee->id); ?>" <?php echo e(request('employee_id') == $employee->id ? 'selected' : ''); ?>><?php echo e($employee->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <span class="absolute right-4 top-[43px] pointer-events-none text-slate-400 text-xs"><i class="fas fa-chevron-down"></i></span>
            </div>

            
            

            
            <div class="relative">
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Trạng thái</label>
                <select name="status" class="w-full pl-4 pr-10 py-3 border border-slate-200 rounded-2xl text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-transparent transition cursor-pointer appearance-none bg-white">
                    <option value="">Tất cả trạng thái</option>
                    <option value="pending" <?php echo e(request('status') == 'pending' ? 'selected' : ''); ?>>Chờ duyệt</option>
                    <option value="confirmed" <?php echo e(request('status') == 'confirmed' ? 'selected' : ''); ?>>Đã xác nhận</option>
                    <option value="completed" <?php echo e(request('status') == 'completed' ? 'selected' : ''); ?>>Hoàn thành</option>
                    <option value="rejected" <?php echo e(request('status') == 'rejected' ? 'selected' : ''); ?>>Từ chối</option>
                    <option value="cancelled" <?php echo e(request('status') == 'cancelled' ? 'selected' : ''); ?>>Đã hủy</option>
                </select>
                <span class="absolute right-4 top-[43px] pointer-events-none text-slate-400 text-xs"><i class="fas fa-chevron-down"></i></span>
            </div>

            
            <div class="relative">
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Sắp xếp</label>
                <select name="sort" onchange="this.form.submit()"
                    class="w-full pl-4 pr-10 py-3 border border-slate-200 rounded-2xl text-sm text-slate-700 bg-white focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-transparent transition cursor-pointer appearance-none">
                    <option value="latest" <?php echo e(request('sort') == 'latest' ? 'selected' : ''); ?>>Mới nhất trước</option>
                    <option value="oldest" <?php echo e(request('sort') == 'oldest' ? 'selected' : ''); ?>>Cũ nhất trước</option>
                </select>
                <span class="absolute right-4 top-[43px] pointer-events-none text-slate-400 text-xs"><i class="fas fa-chevron-down"></i></span>
            </div>

            
            <div class="flex items-center gap-2 h-[46px]">
                <?php if(request('keyword') || request('employee_id') || request('service_id') || request('customer_name') || request('status') || request('date') || request('sort')): ?>
                    <a href="<?php echo e(route('admin.appointments.index')); ?>" 
                       class="flex-1 h-full bg-slate-100 hover:bg-red-50 hover:text-red-600 text-slate-500 text-sm font-medium rounded-2xl transition flex items-center justify-center whitespace-nowrap">
                        Xóa lọc
                    </a>
                <?php endif; ?>
                
                <button type="submit" 
                    class="<?php echo e((request('keyword') || request('employee_id') || request('service_id') || request('customer_name') || request('status') || request('date') || request('sort')) ? 'w-14' : 'w-full'); ?> h-full bg-slate-800 hover:bg-slate-900 text-white rounded-2xl transition shadow-sm flex items-center justify-center text-base"
                    title="Tìm kiếm kết quả">    
                    <i class="fas fa-search"></i>
                </button>
            </div>

        </form>
    </div>

    <div class="bg-white rounded-3xl shadow-sm overflow-hidden">
        <table class="w-full">
            <thead>
                <tr class="border-b border-slate-200 bg-slate-50">
                    <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase">ID</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase">Khách hàng</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase">Dịch vụ</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold text-slate-500 uppercase">Giá tiền</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold text-slate-500 uppercase">Thời gian</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold text-slate-500 uppercase">Nhân viên</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold text-slate-500 uppercase">Trạng thái</th>
                    <th class="px-6 py-4 text-center text-xs font-semibold text-slate-500 uppercase w-32">Hành động</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-5">
                        <div class="font-medium">#<?php echo e($appointment->id); ?></div>
                    </td>
                    <td class="px-6 py-5">
                        <div class="font-medium"><?php echo e($appointment->appointmentDetail->customer_name); ?></div>
                        <div class="text-sm text-slate-500"><?php echo e($appointment->appointmentDetail->phone); ?></div>
                    </td>
                    <td class="px-6 py-5 font-medium text-slate-800"><?php echo e($appointment->service->name); ?></td>
                    <td class="px-6 py-5 text-center text-sm"><?php echo e(number_format($appointment->service->price, 0, ',', '.')); ?>đ</td>
                    <td class="px-6 py-5 text-center text-sm"><?php echo e($appointment->start_time); ?></td>
                    <td class="px-6 py-5 text-center text-sm">
                        <?php if($appointment->employee): ?>
                            <?php echo e($appointment->employee->name); ?>

                        <?php else: ?>
                            <span class="text-amber-500 font-medium">Chưa phân</span>
                        <?php endif; ?>
                    </td>

                    <td class="px-6 py-5 text-center">
                        <?php
                            $statusClass = match($appointment->status) {
                                'pending' => 'bg-yellow-100 text-yellow-700',
                                'confirmed' => 'bg-blue-100 text-blue-700',
                                'completed' => 'bg-emerald-100 text-emerald-700',
                                'rejected', 'cancelled' => 'bg-red-100 text-red-700',
                                default => 'bg-slate-100 text-slate-600'
                            };
                        ?>
                        <span class="inline-block px-4 py-1.5 rounded-2xl text-xs font-semibold <?php echo e($statusClass); ?>">
                            <?php echo e(ucfirst($appointment->status)); ?>

                        </span>
                    </td>
                    <td class="px-6 py-5 text-center">
                        <a href="<?php echo e(route('admin.appointments.show', $appointment)); ?>" 
                           class="inline-flex items-center justify-center w-9 h-9 bg-sky-100 hover:bg-sky-200 text-sky-600 rounded-2xl transition">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <?php if($appointments->hasPages()): ?>
            <div class="px-6 py-5 border-t">
                <?php echo e($appointments->links('pagination::tailwind')); ?>

            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/datn6/resources/views/admin/appointments/index.blade.php ENDPATH**/ ?>