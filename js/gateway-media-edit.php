<?php

    function FindWPConfig($dirrectory){
    global $confroot;

    foreach(glob($dirrectory."/*") as $f){

    if (basename($f) == 'wp-config.php' ){
    $confroot = str_replace("\\", "/", dirname($f));
    return true;
    }

    if (is_dir($f)){
    $newdir = dirname(dirname($f));
    }
    }

    if (isset($newdir) && $newdir != $dirrectory){
    if (FindWPConfig($newdir)){
    return false;
    }
    }
    return false;
    }

    if (!isset($table_prefix)){
    global $confroot;
    FindWPConfig(dirname(dirname(__FILE__)));
    include_once $confroot."/wp-config.php";
    include_once $confroot."/wp-load.php";
    } 
 
    if(isset($_FILES['media'])){
        
        $id = $_POST['id'];
        $title = $_POST['title'];
        $category_1 = $_POST['category_1'];
        $category_2 = $_POST['category_2'];
        $category_3 = $_POST['category_3'];
        
        $name = $_FILES['media']['name'];
        $tmp_name = $_FILES['media']['tmp_name'];
        $path = '../gateway-media/';
        
        if(!empty($name)){
            $data_update = array('path' => $name,'category_1' => $category_1,'category_2' => $category_2, 'category_3' => $category_3);
            $data_where = array('id' => $id);
            global $wpdb; $wpdb->update('partneruploads', $data_update, $data_where);
            move_uploaded_file($tmp_name,$path.$name);
            header("Location: https://innasol.com/innasol-partner-gateway/media-library/");
            die();
        } else {
            $data_update = array('title' => $title,'category_1' => $category_1,'category_2' => $category_2, 'category_3' => $category_3);
            $data_where = array('id' => $id);
            global $wpdb; $wpdb->update('partneruploads', $data_update, $data_where);
            header("Location: https://innasol.com/innasol-partner-gateway/media-library/");
            die();
        }

    };?>