<?php
    include ("../model/connect.php");
    session_start();
?>
<?php
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'detailsproduct':
            case 'login':
            case 'registry':
            case 'menu':
            case 'shopping_cart':
                include ("../view/headermenu.php");
                break;
            default:
                include ("../view/headerhome.php");
                break;
        }  
    }else{
        include ("../view/headerhome.php");
    }
?>
<?php
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'menu':
                include ("../view/menu.php");
                break;
            case 'login':
                include ("../view/login.php");
                break;
            case 'registry':
                include ("../view/registry.php");
                break;
            case 'logout':
                include ("../view/logout.php");
                break;
            case 'detailsproduct':
                include ("../view/DetailProduct.php");
                break;
            case 'shopping_cart':
                include ("../view/shoppingcart.php");
                break;
            default:
                include ("../view/home.php");
                break;
        }  
    }else{
        include ("../view/home.php");
    }
?>
<?php
    include ("../view/footer.php");
?>