<?php $__env->startSection('title', koel_branding('name')); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        window.MAILER_CONFIGURED = <?php echo json_encode(mailer_configured(), 15, 512) ?>;
        window.SSO_PROVIDERS = <?php echo json_encode(collect_sso_providers(), 15, 512) ?>;
        window.ACCEPTED_AUDIO_EXTENSIONS = <?php echo json_encode(collect_accepted_audio_extensions(), 15, 512) ?>;

        <?php if(session()->has('demo_account')): ?>
            window.DEMO_ACCOUNT = <?php echo json_encode(session('demo_account'), 15, 512) ?>;
        <?php elseif(isset($token)): ?>
            window.AUTH_TOKEN = <?php echo json_encode($token, 15, 512) ?>;
        <?php endif; ?>
    </script>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/assets/js/app.ts']); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\MY PC\Downloads\koel-master\resources\views/index.blade.php ENDPATH**/ ?>