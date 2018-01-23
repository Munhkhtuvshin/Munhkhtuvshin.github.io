<?php
	include("common.php");
  include("header.php");
?>
<script>
	var c=0;
	$(document).ready(
$('#nevt').click(function(){	
	if(c==0){ $('#contact').animate({ 'top':290 }); $('#log').show(); c=1;}
		
	else if(c==1){ 
	 $('#contact').animate({ 'top':0 }); $('#log').hide(); c=0;
	}
	})	);
	
</script>
    <!-- Page Content -->
    <div class="container main-container" style="margin-top:58px;">
      <div class="row">
        <div class="col-lg-2 col-sm-4" style="left:0px; top:150px; position:absolute;">
          <h1 class="my-4">Каталоги</h1>
          <div class="list-group">
            <?php foreach ($categories as $id ) { ?>
            	<a href="list.php?c=<?php echo $id['kod'] ?>" class="list-group-item"><?php echo $id['angilal_ner'] ?></a>
            <?php } ?>
          </div>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-7 col-sm-1" style="left:210px; top:150px; position:absolute; margin-top:10px;">
          
          <div class="row">
            <?php foreach ($product as $id ) { ?> 
              <div class="col-lg-3 col-sm-1 mb-3">
                <div class="card h-100">
                  <a href="cart.php?id=<?php echo $id['id']; ?>">
                    <img width=80 src="data:image;base64,<?php echo base64_encode($id["imag"]); ?>" >
                  </a>
                  <div class="card-body">
                    <p class="card-text"><?php echo $id["description"]; ?></p>
                  </div>
                  <div class="card-footer">
                   
                  </div>
                </div>
              </div>
            <?php } ?>			
          </div>		  
		 </div>
          <!-- /.row -->
		  <div class="col-lg-3 col-sm-2 "style="left:930px; top:150px; position:absolute; margin-top:30px;"  >
		  
				<div class="panel panel-primary" id="log" style="display: none;">
				  <div class="panel-heading">Нэвтрэх хэсэг</div>
				  <div class="panel-body">
					  <form>						  
						  <div class="form-group">
							<label for="mail">Имэйл</label>
								<input type="text" class="form-control" name="mail" value="">	
						  </div>
							<div class="form-group">
							<label>Нууц үг</label>
								<input type="password" class="form-control" name="pass">	
							</div>
							<input class="btn btn-success" type="submit" value="Нэвтрэх" name="submi">
					  </form>
				  </div>
				</div>
				
				<div class="col-lg-11 col-sm-2" style="left:18px; top:0px; position:absolute;" id="contact"> 
					<div class="panel panel-primary">
					  <div class="panel-heading">Холбоо барих</div>
					  <div class="panel-body">Имейл: hurlal@urlal.com  <br>Утас: 77102442 99547812  89124578 <br>Хаяг:  Монгол улс Улаанбаатар хот Баянгол дүүрэг 19-р хороо ШХ 24-855 <br>
							Facebook: www.facebook.com/monoffs <br>Viber: +97689918804<br>	WeChat: +97689918804</div>
					</div>
				</div>
		  </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
	
<?php
  include("footer.php");
?>
