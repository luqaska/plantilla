<?php
header("content-type: text/plain");
if(isset($_POST["key"]) && isset($_POST["file"])){
if($_POST["key"]=="key"){
if($_POST["file"]=="" || $_POST["file"]=="index.html" || $_POST["file"]=="index.php"){
include "files/index.php";
die("text/markdown\n".$html);
}elseif(file_exists("files/".$_POST["file"])){
include "files/index.php";
die($mime."\n".$html);
}else{die("text/markdown\n#Error 404");}
}
} ?>
