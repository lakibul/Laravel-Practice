<?php include 'header-productDetails.php' ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/img/<?php echo $result['image']; ?>" alt="" style="height: 300px"/>
            </div>
            <div class="col-md-6">
                <h1><?php echo $result['name']; ?></h1>
                <h3>TK. <?php echo $result['price']; ?></h3>
                <p><?php echo $result['category']; ?></p>
                <p><?php echo $result['brand']; ?></p>
                <p><?php echo $result['description']; ?></p>
            </div>
        </div>
    </div>
</section>
