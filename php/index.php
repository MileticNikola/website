<?php
include_once __DIR__."/config.php";
$path = explode("/",addslashes($_GET['path']));
ob_start();
if(!$path || $path[0]==""){
    //Entry page
    include __DIR__."/../pages/entry.php";
}else{
    //Grab layout page
    if(file_exists(__DIR__."/../pages/".$path[0].".php")){
        include __DIR__."/../pages/".$path[0].".php";
    }else{
        //404
        include __DIR__."/../pages/error404.php";
    }
}
$pageHtml = ob_get_clean();
include __DIR__."/../components/head.php";
include __DIR__."/../components/header.php";
echo $pageHtml;
include __DIR__."/../components/footer.php";