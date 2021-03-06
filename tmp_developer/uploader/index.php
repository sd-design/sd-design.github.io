<?php
// Start the session
session_start();
/*
 * jQuery File Upload Plugin PHP Example 5.14
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
$session_i = session_id();
error_reporting(E_ALL | E_STRICT);
require('UploadHandler.php');




$upload_handler = new UploadHandler(array(
    'accept_file_types' => '/\.(gif|jpe?g|png)$/i'
));
