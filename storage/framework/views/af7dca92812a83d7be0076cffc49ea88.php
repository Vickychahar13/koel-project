<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <meta name="description" content="<?php echo e(config('app.tagline')); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">

    <meta name="theme-color" content="#282828">
    <meta name="msapplication-navbutton-color" content="#282828">

    <link rel="manifest" href="<?php echo e(static_url('manifest.json')); ?>" />
    <meta name="msapplication-config" content="<?php echo e(static_url('browserconfig.xml')); ?>" />
    <link rel="icon" type="image/x-icon" href="<?php echo e(koel_branding('logo') ?? static_url('img/favicon.ico')); ?>" />
    <link rel="icon" href="<?php echo e(koel_branding('logo') ?? static_url('img/icon.png')); ?>">
    <link rel="apple-touch-icon" href="<?php echo e(koel_branding('logo') ?? static_url('img/icon.png')); ?>">

    <?php if (! (License::isPlus())): ?>
        <script src="https://app.lemonsqueezy.com/js/lemon.js" defer></script>
    <?php endif; ?>

    <script>
        // Work around for "global is not defined" error with local-storage.js
        window.global = window
    </script>
</head>
<body class="text-k-fg-70">
<div id="app"></div>

<script>
    window.BASE_URL = <?php echo json_encode(base_url(), 15, 512) ?>;
    window.IS_DEMO = <?php echo json_encode(config('koel.misc.demo'), 15, 512) ?>;

    window.PUSHER_APP_KEY = <?php echo json_encode(config('broadcasting.connections.pusher.key'), 15, 512) ?>;
    window.PUSHER_APP_CLUSTER = <?php echo json_encode(config('broadcasting.connections.pusher.options.cluster'), 15, 512) ?>;

    window.BRANDING = <?php echo json_encode(koel_branding(), 15, 512) ?>;
</script>

<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\MY PC\Downloads\koel-master\resources\views/base.blade.php ENDPATH**/ ?>