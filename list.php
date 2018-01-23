<?php
	include("common.php");
  include("header.php");
  $c = $_GET["c"]; 
?>
    <!-- Page Content -->
    <div class="container main-container">
      <div class="row">
        <div class="col-lg-2">
          <h1 class="my-4">Каталоги</h1>
          <div class="list-group">
            <?php foreach ($categories as $id ) { ?>
            	<a href="list.php?c=<?php echo $id['kod'] ?>" class="list-group-item"><?php echo $id['angilal_ner'] ?></a>
            <?php } ?>
          </div>
       </div><!-- /.col-lg-3 -->
        <div class="col-lg-7">
          <?php foreach ($product as $id ) 
            if ($id["angilal"] == $c) {  ?>
          <div class="row">
              <div class="col-md-2">
                <img class="card-img-top" src="data:image;base64,<?php echo base64_encode($id["imag"]);  ?>" alt="">
              </div>
              <div class="col-md-2">
                <h4 class="card-title">
                  <a href="detail.php?p=<?php echo $id; ?>"><?php echo $id["negj_vne"]; ?></a>
                </h4>
                
                <p class="card-text"><?php echo $id["description"]; ?></p>
                <p><a href="cart.php?id=<?php echo $id['id']; ?>&de=<?php echo $id["angilal"]?>" class="btn btn-primary">Захиалга хийх</a></p>
              </div>
          </div>    
          <?php } ?>
        </div><!-- /.col-lg-9 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
<?php
  include("footer.php");
?>
