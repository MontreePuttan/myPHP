<?php  
	include "../header/header.php";
?>

<body id="one">

	<div class="container">

	<!-- Start Nav -->
	<nav class="navbar navbar-default" style="margin-top:20px">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">LOGO</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="content.php">กรอกรายละเอียด</a></li>
        <li><a href="content.php">รายละเอียดผู้รับรอง</a></li>
        <li><a href="report_formone.php">รายงาน</a></li>
        
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- End Nav -->

		<!-- Open Panel -->
		<div class="panel panel-default">
			<div class="panel-heading">รายละเอียดผู้รับรอง</div>

			<!-- start panelbody-->
			<div class="panel-body">
			

				<!-- Open Form Two -->
				<form class="form-horizontal" method="post" enctype="multipart/form-data" action="" >
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">ชื่อ - นามสุล ผู้นำเข้าข้อมูล</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="inputPassword3" placeholder="ชื่อ - นามสุล ผู้นำเข้าข้อมูล" name="" >
						</div>
					</div>
					
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">ชื่อ - นามสุล ผู้บริหารหน่วยงาน(ที่ลงนาม)</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="inputPassword3" placeholder="ชื่อ - นามสุล ผู้บริหารหน่วยงาน" name="" >
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">ตำแหน่ง</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="inputPassword3" placeholder="ตำแหน่ง" name="" >
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">ชื่อ - นามสุล ผู้รายงานและอนุมัติ</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="inputPassword3" placeholder="ชื่อ - นามสุล ผู้รายงานและอนุมัติ" name="" >
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">รายงาน ณ วันที่</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="inputPassword3" placeholder="รายงาน ณ วันที่" name="" >
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="submit" class="btn btn-primary" value="บันทักข้อมูล">

						</div>
					</div>
				</form>
				<!-- Close Form Two -->
			</div>
			
		</div>
		<!-- Close Panel-->

		</div>
		
<?php  
	include "../footer/footer.php";
?>
		