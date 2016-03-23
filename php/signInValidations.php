<?php
/**
 * Created by PhpStorm.
 * User: Zerzolar
 * Date: 15.3.2016 г.
 * Time: 21:55
 */
    require_once('dbClass.php');
    ?>
        <!--            <img src="../Pictures/no.png" alt="">-->
        <script>alert('e3cho');</script>
    <?php
    $username = $_POST['username'];
    $query = "SELECT * FROM `users` WHERE `username_sign` = '".$data['username_sign']."' ";
    $result = $db->fetchArray($query);
    if(count($result) > 0)
    {
        echo 'error';
    }
    else
    {
        echo 'no error';
    }
