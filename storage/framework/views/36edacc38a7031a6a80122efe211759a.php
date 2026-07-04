<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-[#F8FAF8] flex items-center justify-center p-6">

<div class="w-full max-w-md bg-white rounded-3xl shadow-xl p-8">

    
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-[#6B8F71]"> BerryNice </h1>

        <p class="text-slate-500 mt-2"> Chào mừng bạn quay trở lại </p>
    </div>

    <?php if(session('error')): ?>
        <div class="mb-5 rounded-xl bg-red-50 border border-red-200 text-red-600 px-4 py-3 text-sm">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

    <form method="POST" action="/login" class="space-y-5">
        <?php echo csrf_field(); ?>

        
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-2">
                Email
            </label>

            <input
                type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Nhập email"

                class="w-full rounded-xl border px-4 py-3 focus:outline-none focus:ring-2
                <?php echo e($errors->has('email')
                    ? 'border-red-400 focus:ring-red-200'
                    : 'border-slate-300 focus:border-[#6B8F71] focus:ring-[#A8BCA1]'); ?>">
        </div>

        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-sm text-red-500 -mt-3"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-2">
                Mật khẩu
            </label>

            <input
                type="password" name="password" placeholder="Nhập mật khẩu" class="w-full rounded-xl border px-4 py-3 focus:outline-none focus:ring-2
                <?php echo e($errors->has('password')
                    ? 'border-red-400 focus:ring-red-200'
                    : 'border-slate-300 focus:border-[#6B8F71] focus:ring-[#A8BCA1]'); ?>">
        </div>

        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-sm text-red-500 -mt-3"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <button
            type="submit" class="w-full rounded-xl bg-[#6B8F71] py-3 text-white font-semibold hover:bg-[#557A5E] transition">
            Đăng nhập
        </button>
    </form>

    <div class="mt-6 text-center text-sm text-slate-500">
        Chưa có tài khoản?
        <a href="/register" class="font-semibold text-[#6B8F71] hover:underline">
            Đăng ký ngay
        </a>
    </div>

</div>

</body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Code_DATN2/resources/views/auth/login.blade.php ENDPATH**/ ?>