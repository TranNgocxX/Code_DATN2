<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['service']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['service']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<a href="<?php echo e(route('services.show', $service->slug)); ?>"
   class="group flex flex-col h-full bg-[#FCFAF2] rounded-2xl overflow-hidden border border-[#EBE7D5] hover:border-[#C4B797] shadow-[0_4px_20px_-4px_rgba(107,143,113,0.08)] hover:shadow-[0_12px_30px_-6px_rgba(107,143,113,0.15)] transition-all duration-500 ease-out cursor-pointer">
    
    
    <div class="relative w-full aspect-[4/3] overflow-hidden bg-[#EAE5D3]">
        <?php if($service->image): ?>
            <img src="<?php echo e(asset('storage/'.$service->image)); ?>" 
                 class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-700 ease-out"
                 alt="<?php echo e($service->name); ?>"
                 onerror="this.src='https://placehold.co/600x450?text=BerryNice+Spa'">
        <?php else: ?>
            <div class="w-full h-full flex items-center justify-center text-4xl bg-[#E2DAC3] text-[#6B8F71]/70">🌿</div>
        <?php endif; ?>
        <div class="absolute inset-0 bg-gradient-to-t from-black/5 to-transparent pointer-events-none"></div>
    </div>

    
    <div class="p-6 md:p-7 flex-1 flex flex-col justify-between">
        <div>
            
            <h5 class="text-lg md:text-xl font-medium text-[#2C3E35] tracking-wide mb-2 line-clamp-2 group-hover:text-[#6B8F71] transition-colors duration-300">
                <?php echo e($service->name); ?>

            </h5>
            
            
            <p class="text-sm md:text-base text-[#606F66] font-light leading-relaxed mb-6 line-clamp-2">
                <?php echo e($service->short_description); ?>

            </p>    
        </div>
        
        
        <div class="flex items-center justify-between pt-4 border-t border-[#EBE7D5]">
            
            <div class="flex items-center gap-1.5 text-xs md:text-sm text-[#2D531A] font-light tracking-wider uppercase">
                <svg class="w-4 h-4 text-[#8A9A90]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span><?php echo e($service->duration); ?> phút</span>
            </div>
            
            
            <span class="text-lg md:text-xl font-semibold text-[#477023] tracking-tight">
                <?php echo e(number_format($service->price)); ?><span class="text-sm font-normal ml-0.5">đ</span>
            </span>
        </div>
    </div>
</a><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/datn6/resources/views/components/service-card.blade.php ENDPATH**/ ?>