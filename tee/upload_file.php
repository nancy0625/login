<?php
if ((($_FILES["file"]["type"] == "php") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg")) && ($_FILES["file"]["size"] < 20000)) { 
    if ($_FILES["file"]["error"] > 0) { echo "Return Code: " . $_FILES["file"]["error"] . "<br />"; }
else { 
   if (file_exists("upload/" . $_FILES["file"]["name"]))
   { echo $_FILES["file"]["name"] . " already exists.已经存在 "; }
  else { move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]); 
   echo "Stored in: " . "upload/" . $_FILES["file"]["name"]; 
   }
}
} else { echo "Invalid file"; } 

?>