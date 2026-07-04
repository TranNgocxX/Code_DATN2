<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-[#F8FAF8] flex items-center justify-center p-6">

<div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

    <h1 class="text-3xl font-bold text-center text-[#4A6B53]">
        BerryNice
    </h1>

    <p class="text-center text-slate-500 mt-2 mb-8">
        Tạo tài khoản mới
    </p>

    <form method="POST" action="/register" class="space-y-5">
        <?php echo csrf_field(); ?>

        <div>
            <input
                name="name" value="<?php echo e(old('name')); ?>" placeholder="Họ tên"
                class="w-full rounded-xl border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#A8BCA1]
                <?php echo e($errors->has('name') ? 'border-red-500' : 'border-slate-300'); ?>">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="mt-1 text-sm text-red-500"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div>
            <input
                type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email"
                class="w-full rounded-xl border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#A8BCA1]
                <?php echo e($errors->has('email') ? 'border-red-500' : 'border-slate-300'); ?>">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="mt-1 text-sm text-red-500"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div>
            <input
                type="password" name="password" placeholder="Mật khẩu"
                class="w-full rounded-xl border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#A8BCA1]
                <?php echo e($errors->has('password') ? 'border-red-500' : 'border-slate-300'); ?>">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="mt-1 text-sm text-red-500"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <input
            type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu"
            class="w-full rounded-xl border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#A8BCA1]">
        <button
            class="w-full rounded-xl bg-[#6B8F71] py-3 font-semibold text-white hover:bg-[#557A5E] transition">
            Đăng ký
        </button>

    </form>

    <p class="text-center text-sm text-slate-500 mt-6">
        Đã có tài khoản?
        <a href="/login" class="font-semibold text-[#4A6B53] hover:underline">
            Đăng nhập
        </a>
    </p>

</div>

</body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Code_DATN/resources/views/auth/register.blade.php ENDPATH**/ ?>