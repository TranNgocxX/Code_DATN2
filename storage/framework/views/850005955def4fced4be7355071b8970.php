<?php $__env->startSection('title', 'Thông tin cá nhân'); ?>

<?php $__env->startSection('content'); ?>
<?php
    // Hệ thống Class dùng chung để đồng bộ UI/UX toàn bộ trang
    $inputClass = "form-field w-full px-5 py-3.5 bg-slate-50/60 border border-slate-200 rounded-xl focus:border-[#6B8F71] focus:ring-4 focus:ring-[#6B8F71]/10 outline-none transition-all duration-200 text-slate-800 placeholder-slate-400 text-sm";
    $labelClass = "block text-xs font-bold uppercase tracking-wider text-slate-500 mb-2 ml-1";
    $avatarClass = "w-32 h-32 object-cover rounded-full border-4 border-white shadow-md ring-1 ring-slate-100 mx-auto transition-transform duration-300 group-hover:scale-105";
    $errorClass = "text-red-500 text-xs mt-1.5 ml-1 font-medium";
?>

<div class="max-w-6xl mx-auto px-4 py-10">
    
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
        
        
        <div class="space-y-8 lg:col-span-1">
            
            
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-8 text-center relative overflow-hidden">
                <div class="absolute top-0 left-0 right-0 h-2 bg-[#6B8F71]"></div>
                
                <div class="relative flex justify-center mb-4 mt-4">
                    <div class="relative group cursor-pointer">
                        <div id="avatar-preview-container">
                            <?php if($user->avt): ?>
                                <img src="<?php echo e(Storage::url($user->avt)); ?>" id="avatar-preview" class="<?php echo e($avatarClass); ?>">
                            <?php else: ?>
                                <div id="avatar-preview" class="<?php echo e($avatarClass); ?> bg-[#DDEAD1] text-[#6B8F71] flex items-center justify-center text-4xl font-bold">
                                    <?php echo e(strtoupper(substr($user->name, 0, 1))); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        
                        
                        <label for="avt" class="absolute bottom-0 right-0 bg-[#6B8F71] text-white w-9 h-9 rounded-full cursor-pointer hover:scale-110 transition-all shadow-md flex items-center justify-center text-xl font-light select-none">
                            +
                            <input type="file" id="avt" name="avt" form="profile-form" class="hidden" accept="image/*">
                        </label>
                    </div>
                </div>
                
                <h3 class="text-lg font-bold text-slate-800"><?php echo e($user->name); ?></h3>
                <p class="text-xs text-slate-400 mt-0.5"><?php echo e($user->email); ?></p>
            </div>

            
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 md:p-8">
                <div class="flex items-center gap-2 mb-6 border-b border-slate-50 pb-3">
                    <span class="w-1.5 h-4 bg-[#6B8F71] rounded-full"></span>
                    <h2 class="text-md font-bold text-slate-800 uppercase tracking-wide text-sm">Đổi mật khẩu</h2>
                </div>

                <form id="password-form" method="POST" action="<?php echo e(route('profile.password')); ?>" class="space-y-5">
                    <?php echo csrf_field(); ?> 
                    <?php echo method_field('PUT'); ?>

                    <div>
                        <label class="<?php echo e($labelClass); ?>">Mật khẩu hiện tại <span class="text-red-400">*</span></label>
                        <input type="password" name="current_password" class="<?php echo e($inputClass); ?>" required>
                        <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="<?php echo e($errorClass); ?>"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div>
                        <label class="<?php echo e($labelClass); ?>">Mật khẩu mới <span class="text-red-400">*</span></label>
                        <input type="password" name="password" class="<?php echo e($inputClass); ?>" required>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="<?php echo e($errorClass); ?>"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div>
                        <label class="<?php echo e($labelClass); ?>">Xác nhận mật khẩu mới <span class="text-red-400">*</span></label>
                        <input type="password" name="password_confirmation" class="<?php echo e($inputClass); ?>" required>
                    </div>

                    <button type="submit"
                        class="w-full mt-2 py-3.5 rounded-xl text-sm font-bold transition-all duration-200 outline-none bg-[#6B8F71] text-white hover:bg-[#557A5E] cursor-pointer shadow-sm active:scale-[0.99]">
                        Cập nhật mật khẩu
                    </button>
                </form>
            </div>
        </div>

        
        <div class="lg:col-span-2 bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
            
            <div class="border-b border-slate-100 px-8 py-6 bg-slate-50/30 flex items-center justify-between">
                <h2 class="text-lg font-bold text-slate-800 uppercase tracking-wide text-sm">Thông tin tài khoản</h2>
            </div>

            <form id="profile-form" method="POST" action="<?php echo e(route('profile.update')); ?>" enctype="multipart/form-data" class="p-8 md:p-10">
                <?php echo csrf_field(); ?> 
                <?php echo method_field('PUT'); ?>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6">
                    
                    <div class="md:col-span-2">
                        <label class="<?php echo e($labelClass); ?>">Họ và tên <span class="text-red-400">*</span></label>
                        <input type="text" name="name" data-origin="<?php echo e(old('name', $user->name)); ?>" value="<?php echo e(old('name', $user->name)); ?>" class="<?php echo e($inputClass); ?>" required>
                    </div>

                    <div>
                        <label class="<?php echo e($labelClass); ?>">Ngày sinh</label>
                        <input type="date" name="birthday" data-origin="<?php echo e(old('birthday', $user->birthday)); ?>" value="<?php echo e(old('birthday', $user->birthday)); ?>" class="<?php echo e($inputClass); ?>">
                    </div>

                    <div>
                        <label class="<?php echo e($labelClass); ?>">Số điện thoại</label>
                        <input type="text" name="phone" data-origin="<?php echo e(old('phone', $user->phone)); ?>" value="<?php echo e(old('phone', $user->phone)); ?>" placeholder="0xxx xxx xxx" class="<?php echo e($inputClass); ?>">
                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="<?php echo e($errorClass); ?>"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="md:col-span-2">
                        <label class="<?php echo e($labelClass); ?>">Địa chỉ Email <span class="text-red-400">*</span></label>
                        <input type="email" name="email" data-origin="<?php echo e(old('email', $user->email)); ?>" value="<?php echo e(old('email', $user->email)); ?>" class="<?php echo e($inputClass); ?>" required>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="<?php echo e($errorClass); ?>"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="md:col-span-2">
                        <label class="<?php echo e($labelClass); ?>">Địa chỉ thường trú</label>
                        <textarea name="address" data-origin="<?php echo e(old('address', $user->address)); ?>" rows="4" class="<?php echo e($inputClass); ?> resize-none"><?php echo e(old('address', $user->address)); ?></textarea>
                    </div>
                </div>

                
                <div class="mt-8 pt-6 border-t border-slate-100 flex justify-end">
                    <button type="submit" id="submit-btn" disabled
                        class="px-8 py-3.5 rounded-xl text-sm font-bold transition-all duration-200 outline-none
                               bg-slate-100 text-slate-400 cursor-not-allowed w-full md:w-auto
                               data-[active=true]:bg-[#6B8F71] data-[active=true]:text-white data-[active=true]:hover:bg-[#557A5E] data-[active=true]:cursor-pointer data-[active=true]:shadow-sm data-[active=true]:active:scale-[0.99]">
                        Lưu thay đổi
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById('profile-form');
    const btn = document.getElementById('submit-btn');
    const fileInput = document.getElementById('avt');
    const inputs = form.querySelectorAll('input[data-origin], textarea[data-origin]');

    // Xử lý logic bật/tắt nút lưu dựa trên thay đổi thực tế dữ liệu đầu vào
    function checkFormChanges() {
        let isChanged = false;

        // 1. Kiểm tra thay đổi của text/date
        inputs.forEach(input => {
            const originValue = input.getAttribute('data-origin') || '';
            if (input.value.trim() !== originValue.trim()) {
                isChanged = true;
            }
        });

        // 2. Kiểm tra độc lập xem có file mới được chọn hay không
        if (fileInput.files && fileInput.files.length > 0) {
            isChanged = true;
        }

        // Cập nhật trạng thái hiển thị của nút Lưu thay đổi
        if (isChanged) {
            btn.disabled = false;
            btn.setAttribute('data-active', 'true');
        } else {
            btn.disabled = true;
            btn.removeAttribute('data-active');
        }
    }

    // Lắng nghe sự kiện từ các trường nhập liệu text
    form.addEventListener('input', checkFormChanges);
    form.addEventListener('change', checkFormChanges);

    // SỬA LỖI LOGIC: Lắng nghe riêng sự kiện đổi file của Avatar nằm ngoài Form
    fileInput.addEventListener('change', function (e) {
        // Chạy hàm kiểm tra thay đổi ngay khi chọn ảnh mới
        checkFormChanges();

        const file = e.target.files[0];
        if (!file) return;

        // Xử lý tải và hiển thị nhanh ảnh đại diện tạm thời (Preview)
        const reader = new FileReader();
        reader.onload = function () {
            const preview = document.getElementById('avatar-preview');
            const imgClass = "<?php echo e($avatarClass); ?>";

            if (preview.tagName === 'IMG') {
                preview.src = reader.result;
            } else {
                preview.outerHTML = `<img src="${reader.result}" id="avatar-preview" class="${imgClass}">`;
            }
        };
        reader.readAsDataURL(file);
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/datn6/resources/views/user/profile.blade.php ENDPATH**/ ?>