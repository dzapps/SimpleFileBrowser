<?php
use helpers\StringHelper;
use helpers\UrlHelper;
?>

<!doctype html>
<html lang="zh_CN">
<head>
    <title>simpleFileBrowser</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="/static/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/font-awesome-4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/css/base.css">
</head>
<body>

<div class="container">

    <div class="row">

        <?php foreach($files as $file): ?>
        <div class="col-md-3 col-xs-12 icon text-center" onselectstart="return false;" style="-moz-user-select:none;">
            <section class="icon-section" data-p="<?= UrlHelper::to($file['path'])  ?>">
                <div>
                    <i class="fa fa-3x fa-folder-open-o"></i>
                </div>
                <span class="icon-title"><?= StringHelper::encode($file['name']) ?></span>
            </section>
        </div>
        <?php endforeach ?>

    </div>

</div>


<script src="/static/js/jquery.min.js"></script>

<script>
    
    $('.icon-section').click(function () {
        $('.icon-section').removeClass('selected');
        $(this).addClass('selected');
    });
    
    $('.icon-section').dblclick(function() {
        window.location.href = $(this).attr('data-p');
    });

</script>

</body>
</html>