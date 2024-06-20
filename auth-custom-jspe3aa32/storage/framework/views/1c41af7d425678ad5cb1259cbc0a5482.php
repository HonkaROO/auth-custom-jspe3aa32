<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('page-title'); ?></title>
    <style>
        * {
        font-family: calibri;
        }

        .auth-labels {
        display:inline-block;
        width: 8em;
        }

        .auth-textbox {
        /* display: inline-block; */
        margin-bottom: .5em;
        }

    </style>
</head>
<body>
    <?php if(!Auth::check()): ?>
        <?php echo $__env->yieldContent('auth-content'); ?>
    <?php else: ?>
        <?php echo $__env->yieldContent('page-content'); ?>
    <?php endif; ?>
</body>
</html><?php /**PATH D:\Gumanit-laravel\auth-custom-jspe3aa32\resources\views/mainLayout.blade.php ENDPATH**/ ?>