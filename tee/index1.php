
<?php 
if ($_POST['summit']){
    if ($_FILES['txt_file']['name'] != ''){
        $myfile=$_FILES['txt_file'];
        if ($myfile['size']>0 && $myfile['size']<1024*2000){
            $dir = 'upfiles/';
            if(! is_dir($dir))
            {
                mkdir($dir);
            }
            $name = $myfile['name'];
            $rand = rand(100,800);
            
            $name = date('YmdHis').$name.$rand;
            $path = 'upfiles/'.$name;
            
            $i = move_uploaded_file($myfile['tmp_name'],$path);
            
            if ($i==true){
                echo "<script>alert('文件上传成功');</script>";
            }else{
                echo "<script>alert('文件上传失败');</script>";
            }
        }else{
            echo "<script>alert('文件过大，请重新选择');</script>";
        }
    }else {
        echo "<script>alert('请选择要上传的文件');</script>";
    }
}


?>
