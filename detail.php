<?php
	include("common.php");
  include("header.php");
  $p = $_GET["p"];
?>
    <!-- Page Content -->
    <div class="container main-container">
      <div class="row">
        <div class="col-lg-3">
          <h1 class="my-4">Смарт электроникс</h1>
          <div class="list-group">
            <?php foreach ($categories as $id => $category) { ?>
            	<a href="list.php?c=<?php echo $id ?>" class="list-group-item"><?php echo $category["category"] ?></a>
            <?php } ?>
          </div>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-9">
         <div class="card mt-4">
            <img class="card-img-top img-fluid" style="width:350px" src="<?php echo $products[$p]["image"]; ?>" alt="">
            <div class="card-body">
              <h3 class="card-title"><?php echo $products[$p]["name"]; ?></h3>
              <h4><?php echo $products[$p]["price"]; ?></h4>
              <p class="card-text"><?php echo $products[$p]["description"]; ?></p>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars
              <p><a href="cart.php?op=add&id=<?php echo $p; ?>" class="btn btn-primary">Карт руу нэмэх</a></p>
            </div>
          </div><!-- /.card -->
          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Бүтээгдэхүүний талаарх коммент
            </div>
            <div class="card-body">
              <p>Боломжийн үнэтэй</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <a href="#" class="btn btn-success">Leave a Review</a>
            </div>
          </div><!-- /.card -->
        </div><!-- /.col-lg-9 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
<?php
  include("footer.php");
?>
