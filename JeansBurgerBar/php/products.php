<?php

    require ('connect.php');

    $link = mysqli_connect($host, $user, $password, $database);
    if (!$link) {
        mysqli_connect_errno();
    } 
    $sql = 'SELECT * FROM burgers';
    $result = mysqli_query($link, $sql);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach ($products as $product) {
        
        $id = $product["ID"];
        if (($product["I"]==4)&&($product["ID"]!=67)){
            $mark = 'мл';
        } else{
            $mark = 'г';
        }?>
            <div class="product category<?php echo $product["I"] ?>">
                <img src="<?php echo $product["PICTURE"] ?>" class="cart_img">
                <div class="cart_name"><?php echo $product["NAMED"] ?></div>
                <div class="cart_info">
                    <div class="cart_description">
                        <?php echo $product["DESC_B"] ?>
                        <br><?php echo $product["VOL"].$mark ?>
                    </div>
                    <div class="cart_main">
                        <div class="cart_cost_count price"><?php echo $product["COST"] ?>₽</div>
                        <div class="cart_cost cost"><?php echo $product["COST"] ?>₽</div>
                        <div class="cart_counter">
                            <button class="minus pm_btn">-</button>
                            <span class="cart_count">1</span>
                            <button class="plus pm_btn">+</button>
                        </div>
                        <button class="in_basket">В корзину</button>
                    </div>
                </div>
            </div>
        <?php
    }
?>