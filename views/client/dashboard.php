
<!-- STARTED DISPLAY PRODUCTS-->     

        <div class="products">
            
            <div class="product-list row">
                <?php
                    foreach($arr['product'] as $item){

                ?>
                <div class="col-lg-3 col-md-6 col-sm-12 mx-product">
                    <div class="product-item card text-center">
                        <a href="?redirect=product&prd_id=<?= $item['prd_id'] ?>"><img src="images/<?= $item['image']; ?>"></a>
                        <h4><a href="?redirect=product&prd_id=<?= $item['prd_id'] ?>"><?= $item['prd_name'] ?></a></h4>
                        <p>Price: <span><?= number_format($item['price']); ?> đ</span></p>
                    </div>
                </div>
                <?php        
                            }
                ?>
                
            </div>
        </div> 
    </div>
<!-- END    -->
