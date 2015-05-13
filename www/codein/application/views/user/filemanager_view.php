<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>File Manager</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>filemanager/styles/reset.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>filemanager/scripts/jquery.filetree/jqueryFileTree.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>filemanager/scripts/jquery.contextmenu/jquery.contextMenu-1.01.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>filemanager/styles/filemanager.css" />
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>filemanager/styles/ie.css" />
<![endif]-->
</head>
<body>
<div>
<form id="uploader" method="post">
<button id="home" name="home" type="button" value="Home">&nbsp;</button>
<h1></h1>
<div id="uploadresponse"></div>
<input id="mode" name="mode" type="hidden" value="add" /> 
<input id="currentpath" name="currentpath" type="hidden" />
<span id="file-input-container">
	<div id="alt-fileinput">
		<input	id="filepath" name="filepath" type="text" /><button id="browse" name="browse" type="button" value="Browse"></button>
	</div>
	<input	id="newfile" name="newfile" type="file" />
</span>
<button id="upload" name="upload" type="submit" value="Upload"></button>
<button id="newfolder" name="newfolder" type="button" value="New Folder"></button>
<button id="grid" class="ON" type="button">&nbsp;</button>
<button id="list" type="button">&nbsp;</button>
</form>
<div id="splitter">
<div id="filetree"></div>
<div id="fileinfo">
<h1></h1>
</div>
</div>

<ul id="itemOptions" class="contextMenu">
	<li class="select"><a href="#select"></a></li>
	<li class="download"><a href="#download"></a></li>
	<li class="rename"><a href="#rename"></a></li>
	<li class="delete separator"><a href="#delete"></a></li>
</ul>

<script type="text/javascript" src="<?php echo base_url();?>js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>filemanager/scripts/jquery.form-3.24.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>filemanager/scripts/jquery.splitter/jquery.splitter-1.5.1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>filemanager/scripts/jquery.filetree/jqueryFileTree.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>filemanager/scripts/jquery.contextmenu/jquery.contextMenu-1.01.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>filemanager/scripts/jquery.impromptu-3.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>filemanager/scripts/jquery.tablesorter-2.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>filemanager/scripts/filemanager.config.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>filemanager/scripts/filemanager.js"></script></div>
</body>
</html>