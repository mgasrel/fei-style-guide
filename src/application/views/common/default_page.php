<!DOCTYPE html>
<html lang="en" class="<?= $page_classes; ?>">
<head>
    <?php $this->load->view('common/head'); ?>
</head>
<body>
<header>
    <?php $this->load->view('common/header'); ?>
</header>
<div class="container" style="padding-top: 70px;">
    <?php if(isset($content) && file_exists(getcwd() . '/application/views/' . $content . '.php')): ?>
        <?php $this->load->view($content); ?>
    <?php else : ?>
        No content
    <?php endif; ?>
</div>
<footer>
    <?php $this->load->view('common/footer'); ?>
</footer>
</div>
</body>
</html>
