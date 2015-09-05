<form action="<?php echo base_url();?>index.php/rekam/add_kondisi_gigi" method="post" id="kondisi_gigi">
    <div class="form-body pal">
    	<input type="text" hidden value="<?php echo $post['id_pasien']?>" placeholder="" name="id_pasien">
    	<input type="text" hidden value="<?php echo $post['kode_gigi']?>" placeholder="" name="kode_gigi">
    	<input type="text" hidden value="<?php echo $post['id_rekam']?>" placeholder="" name="id_rekam">
    	<div class="form-group">
			<label for="permukaan_gigi">Permukaan Gigi</label>
			<select class="form-control" id="permukaan_gigi" name="permukaan_gigi" required>
				<?php
				foreach ($permukaan_gigi as $key) {
					?>
					<option value="<?php echo $key->id_permukaan?>"><?php echo $key->arti_permukaan;?></option>
					<?php
				}
				?>
			</select>
		</div>
		<div class="form-group">
			<label for="keadaan_gigi">Keadaan Gigi</label>
			<select class="form-control" id="keadaan_gigi" name="keadaan_gigi" required>
				<?php
				foreach ($keadaan_gigi as $key) {
					?>
					<option value="<?php echo $key->id_keadaan?>"><?php echo $key->singkatan_keadaan;?></option>
					<?php
				}
				?>
			</select>
		</div>
		<div class="form-group">
			<label for="bahan_restorasi">Bahan Restorasi</label>
			<select class="form-control" id="bahan_restorasi" name="bahan_restorasi" required>
				<?php
				foreach ($bahan_restorasi as $key) {
					?>
					<option value="<?php echo $key->id_bahan?>"><?php echo $key->arti_bahan;?></option>
					<?php
				}
				?>
			</select>
		</div>
		<div class="form-group">
			<label for="restorasi">Restorasi</label>
			<select class="form-control" id="restorasi" name="restorasi" required>
				<?php
				foreach ($restorasi as $key) {
					?>
					<option value="<?php echo $key->id_restorasi?>"><?php echo $key->arti_restorasi;?></option>
					<?php
				}
				?>
			</select>
		</div>
		<div class="form-group">
			<label for="protesa">Protesa</label>
			<select class="form-control" id="protesa" name="protesa" required>
				<?php
				foreach ($protesa as $key) {
					?>
					<option value="<?php echo $key->id_protesa?>"><?php echo $key->arti_protesa;?></option>
					<?php
				}
				?>
			</select>
		</div>
    </div>
    <div class="form-actions text-right pal">
        <button type="submit" class="btn btn-primary" id="detail_submit" style="display: none">
			Tambah Detail</button>
    </div>
</form>