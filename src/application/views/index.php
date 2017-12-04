<!DOCTYPE html>
<html lang="en" class="family <?php echo 'family-' . $current_application->family . ' application application-' . $current_application->id; ?>">
<head>
    <?php $this->load->view('others/style-guide/head'); ?>
</head>
<body>
<header>
    <?php $this->load->view('others/style-guide/header'); ?>
</header>
<div id="content" class="container">
    <aside class="sidebar" style="float: left;margin-top: 40px; position: fixed">
        <?php $this->load->view("others/style-guide/$url_segments[2]/sidebar"); ?>
    </aside>
    <div style="padding-left: 250px">
        <?php $this->load->view("others/style-guide/$url_segments[2]/content"); ?>
    </div>
</div>
</body>

<script type="text/javascript" src="/style-guide/lib/static/libs/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/style-guide/libuide/lib/rainbow/js/rainbow.min.js"></script>
<script type="text/javascript" src="/style-guide/libuide/lib/rainbow/js/language/generic.js"></script>
<script type="text/javascript" src="/style-guide/libuide/lib/rainbow/js/language/html.js"></script>
<script type="text/javascript" src="/style-guide/js/style-guide/style-guide.js"></script>

</html>
