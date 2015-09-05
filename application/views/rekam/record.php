            <!--BEGIN PAGE WRAPPER-->   
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Perawatan</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Rekam</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Record</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div class="row mbl">
                            <div class="col-lg-12">
                                
	                            <div class="col-md-12">
	                                <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
	                                </div>
	                            </div>
                                
                            </div>

                            <div class="col-lg-12">
                            <div class="row">
                    <div class="col-lg-8 col-md-offset-1">
                        <div class="panel panel-green">
                            <div class="panel-heading">Daftar Record</div>
                            <div class="panel-body">
                                <table class="table table-hover-color">
                                    <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Tanggal Rekam</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $no = 0;
                                    foreach ($rekam_pasien as $row) {
                                    	$no++;
                                    ?>  <tr>
                                    	<td><?php echo $no;?></td>
                                        <td><?php echo $row['tanggal_rekam'];?></td>
                                        <td><a href="#" class="btn btn-sm btn-warning">Detail</a></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                <a href="<?php echo base_url();?>index.php/rekam/tambah/<?php echo $id_pasien?>" class="btn btn-primary">Tambah Rekam</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
    </div>
</div>
<!--END CONTENT-->