<header>
    <?php 
    $ime= filter_input(INPUT_GET, "Ceca", FILTER_SANITIZE_STRING);
    if(!empty($ime)){
        include('./pozdravi/user.php');
    }else{
        include('./pozdravi/visitor.php');
    }
    ?>
</header>