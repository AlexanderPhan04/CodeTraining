<!-- chức năng page_layout -->

<ul>
    <li><a href="70.php?page_layout=home_page">Home Page</a></li>
    <li><a href="70.php?page_layout=product">Product</a></li>
    <li><a href="70.php?page_layout=contact">Contact</a></li>
    <li><a href="70.php?page_layout=cart">Cart</a></li>
</ul>

<?php
    if (isset($_GET['page_layout'])) {
        switch ($_GET['page_layout']) {
            case 'home_page':
                include 'home_page.php'; 
                break;
            case 'product':
                include 'product.php'; 
                break;
            case 'contact':
                include 'contact.php'; 
                break;
            case 'cart':
                include 'cart.php'; 
                break;
        }
    }
?>