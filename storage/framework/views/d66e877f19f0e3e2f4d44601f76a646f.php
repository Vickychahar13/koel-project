<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            background: #181818;
            display: table;
            font-size: 24px;
            font-family: system, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            color: #a0a0a0;
        }

        .container {
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            padding: 76px;
        }

        .title {
            font-weight: 100;
            font-size: 48px;
            margin-bottom: 40px;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title"><?php echo $__env->yieldContent('title'); ?></div>
        <div class="details"><?php echo $__env->yieldContent('details'); ?></div>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\Users\MY PC\Downloads\koel-master\resources\views/errors/template.blade.php ENDPATH**/ ?>