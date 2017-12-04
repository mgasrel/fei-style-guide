<!DOCTYPE html>
<html lang="en" >
<head>
    <?php $this->load->view('/common/head'); ?>
</head>
<body>
<header>
    <?php $this->load->view('/common/header'); ?>
</header>
<div id="content" class="container-fluid ">
	<div class="row">

		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>	
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Library</a></li>
			<li class="breadcrumb-item active">Data</li>
		</ol>
		
	</div>
	<div class="row">
		<div class="col-sm-6">
			<ul class="nav nav-tabs ">
			  <li class="nav-item">
			    <a class="nav-link active" href="#">Summary</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Informations</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Files</a>
			  </li>
			</ul>
		</div>
		<div class="col-sm-6 text-right ">
			<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
			  <button type="button" class="btn btn-link btn-lg"><span class="fa fa-plus-circle"> Add </span></button>
			  <button type="button" class="btn btn-link btn-lg"><span class="fa fa-upload"> Export </span></button>
			  <button type="button" class="btn btn-link btn-lg"><span class="fa fa-download"> Download </span></button>
			  <button type="button" class="btn btn-link btn-lg"><span class="fa fa-share-alt"> Share </span></button>
			  <button type="button" class="btn btn-link btn-lg"><span class="fa fa-eye"> Visibility </span></button>
			  <button type="button" class="btn btn-link btn-lg"><span class="fa fa-comment-o"> Comment </span></button>
			
			  
			</div>
		</div>
	</div>
	
	<div class="row">
	   <div class="col-sm-4">
		 
	   </div>
	   <div class="col-sm-8">
		   
	   </div>
   </div>
</div>
</body>

<script type="text/javascript" src="/style-guide/lib/static/libs/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/style-guide/libuide/lib/rainbow/js/rainbow.min.js"></script>
<script type="text/javascript" src="/style-guide/libuide/lib/rainbow/js/language/generic.js"></script>
<script type="text/javascript" src="/style-guide/libuide/lib/rainbow/js/language/html.js"></script>
<script type="text/javascript" src="/style-guide/js/style-guide/style-guide.js"></script>

</html>
