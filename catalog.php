<?php 
    include "header.php"; 
    require_once "config.php";
?>
    <main>
        <section class="popular-tovar">
            <h3>Каталог товаров</h3>
            <div class="tovar-list"></div>
            <?php foreach ($products as $product): ?>
            
                <div class="tovar-card">
                    <div class="tovar-img">
                        <img src="<?php echo $product['img']?>" >
                    </div>
                    <div class="tovar-info">
                        <p><?php echo $product['name'] ?></p>
                        <p class="tovar-price"><?php echo $product['price']?></p>
                        <a href="./product.html">Подробнее</a>
                    </div>
                </div>

            
            <?php endforeach?>
            </div>
        </section>
    </main>
    <?php include "footer.php" ?>
    </body>

</html>