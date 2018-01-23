<?php

  include("common.php");
  include("header.php");
 
  $d=$_GET["id"];
  $des=$_GET["de"];
  
?>
<script>
	<?php if($des=='ts' | $des=='m'){?>
	$(document).ready(function (){ $('#totoi').prop('disabled',true)})
	<?php }else{?>
		$(document).ready(function (){ $('#input1').prop('disabled',true)});
		$(document).ready(function (){ $('#input2').prop('disabled',true)});
		$(document).ready(function (){ $('#input3').prop('disabled',true)});
		$(document).ready(function (){ $('#input4').prop('disabled',true)});
		$(document).ready(function (){ $('#input5').prop('disabled',true)});
	<?php  }?>
</script>
	<!-- Page Content -->
    <div class="container main-container">
	 <div class="row">
            <?php $d=$_GET["id"];
			foreach ($product as $id ) 
			if($id["id"]==$d){?> 
              <div class="col-lg-2 col-sm-4 mb-2">
                <div class="card h-100">
                  <a href="cart.php?id=<?php echo $id['id']; ?>">
                    <img width=80 src="data:image;base64,<?php echo base64_encode($id["imag"]); ?>" >
                  </a>
                  <div class="card-body">
				  <h4 class="card-title">
					  <a href="detail.php?p=<?php echo $id; ?>"><?php echo $id["negj_vne"]; ?></a>
				  </h4>
                    <p class="card-text"><?php echo $id["description"]; ?></p>
                  </div>
                  <div class="card-footer">
                   
                  </div>
                </div>
              </div>
            <?php } ?>
			
    
	
	<form  action="cart.php">
	<div class="col-lg-7 col-sm-2 mb-2">
		  <div class="form-group">
			<label for="inputsm">Биеийн өндөр</label>
			<input class="form-control input-sm" id="input1" type="text">
		  </div>
		   <div class="form-group">
			<label for="inputdefault">Цээжний тойрог</label>
			<input class="form-control input-sm" id="input2" type="text">
		  </div>
		  <div class="form-group">
			<label for="inputlg">Бүсэлхийн тойрог</label>
			<input class="form-control input-sm" id="input3" type="text">
		  </div>
		  </div>
	  	<div class="col-lg-5 col-sm-2 mb-2">
		  <div class="form-group">
			<label for="inputsm">Мөрний өргөн</label>
			<input class="form-control input-sm" id="input4" type="text">
		  </div>
		   <div class="form-group">
			<label for="inputdefault">Гарын урт</label>
			<input class="form-control input-sm" id="input5" type="text">
		  </div>
		  <div class="form-group">
			<label for="inputlg">Толгойн тойрог</label>
			<input class="form-control input-sm" id="totoi" type="text">
		  </div>
		</div>	  
		<input class="form-control input-sm" id="submit" name="submit" type="submit" value="Захиалах">
	</form>,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
	

</div>
		
    </div><!-- /.container -->
<?php
  include("footer.php");
?>
