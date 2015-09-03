
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Tambah Rekam Pasien</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="#">Home</a>&nbsp;&nbsp;<i
                            class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Pasien</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i class="fa fa-user-md fa-fw"></i>&nbsp;<a href="#">Rekam</a>&nbsp;&nbsp;<i
                            class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Pasien</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Tambah</li>
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
                                    <div class="col-lg-10 col-md-offset-1">
                                        <?php
                                        if ($notif == "not_found"){
                                            ?>
                                            <div class="alert alert-warning alert-dismissable">
                                                Rekaman Pasien Tidak Ditemukan. Tambahkan Rekaman Pasien Sekarang
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        <div class="panel panel-orange">
                                            <div class="panel-heading">
                                                Form Tambah Rekaman</div>
                                            <div class="panel-body pan">
                                                <form action="<?php echo base_url();?>index.php/pasien/add" method="post">
                                                <div class="form-body pal">
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-user"></i>
                                                            <input id="inputName" type="text" placeholder="Nama" class="form-control" name="nama_pasien"/></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-envelope"></i>
                                                            <input id="inputID" type="text" placeholder="KTP" class="form-control" name="ktp_pasien"/></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input id="inputTempatLahir" type="text" placeholder="Tempat Lahir" class="form-control" name="tempat_lahir_pasien" /></div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input id="inputTanggalLahir" type="text" placeholder="Tanggal Lahir" class="form-control" name="tanggal_lahir_pasien"/></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input id="inputJK" type="radio" class="form-control" value="laki" name="jenis_kelamin_pasien"/> Laki-laki</div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input id="inputJK" type="radio" class="form-control" value="perempuan" name="jenis_kelamin_pasien"/> Perempuan</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-user"></i>
                                                            <input id="inputSuku" type="text" placeholder="Suku" class="form-control" name="suku_pasien"/></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-user"></i>
                                                            <input id="inputPekerjaan" type="text" placeholder="Pekerjaan" class="form-control" name="pekerjaan_pasien"/></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-user"></i>
                                                            <input id="inputAlamatRumah" type="text" placeholder="Alamat Rumah" class="form-control" name="alamat_rumah_pasien"/></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-user"></i>
                                                            <input id="inputTeleponRumah" type="text" placeholder="Telepon Rumah" class="form-control" name="telepon_rumah_pasien"/></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-user"></i>
                                                            <input id="inputAlamatKantor" type="text" placeholder="Alamat Kantor" class="form-control" name="alamat_kantor_pasien"/></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-user"></i>
                                                            <input id="inputPonsel" type="text" placeholder="No. Ponsel" class="form-control" name="ponsel_pasien"/></div>
                                                    </div>
                                                    <!--
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-lock"></i>
                                                            <input id="inputConfirmPassword" type="password" placeholder="Confirm Password" class="form-control" /></div>
                                                    </div>
                                                    -->
                                                </div>
                                                <div class="form-actions text-right pal">
                                                    <button type="submit" class="btn btn-primary">
                                                        Submit</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://themifycloud.com">2014 © KAdmin Responsive Multi-Purpose Template</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER--> 