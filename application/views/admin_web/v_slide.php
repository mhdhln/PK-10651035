		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Data Slide</h3>
		<ul class="tabs">
   			<li><a href="#tab1">View Slide</a></li>
    		<li><a href="#tab2">Tambah Slide</a></li>
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
    				<th>Nama Slide</th> 
    				<th>Tanggal</th> 
    				<th width="690">Keterangan</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				<?php 
					if(empty($browse_slide)){
						 echo"<tr>
							<td></td>
							<td></td>";
						echo"<td><center>Slide Masih Kosong</center></td>";
						echo"<td></td>
							<td></td>
							</tr>";
					}else{
						foreach($browse_slide as $data):
				?>
				<tr>  
    				<td><?php echo $data->nama_slide; ?></td> 
    				<td><?php echo $data->tgl_upload; ?></td> 
    				<td><?php echo $data->keterangan; ?></td> 
    				<td>
						<a href="c_slide/edit/<?php echo $data->id_slide; ?>"><input type="image" src="<?php echo base_url() ?>berkas/images/img_admin/icn_edit.png" title="Edit"></a>
						<a href="c_slide/delete_slide/<?php echo $data->id_slide; ?>"><input type="image" src="<?php echo base_url() ?>berkas/images/img_admin/icn_trash.png" title="Trash" onclick="return confirm_hapus()"></a>
					</td> 
				</tr> 
			<?php endforeach; ?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			<?php } ?>

			
			<div id="tab2" class="tab_content">
			
			
							<div class="module_content">
						<?php 
							echo form_open_multipart('admin_web/c_slide/save');
							$tgl = date('Y-m-d');
						?>
						<fieldset>
							<label>Nama Gambar Slide</label><font color="red"><?php echo form_error('nama_slide'); ?></font>
							<?php echo form_hidden('tgl_upload',$tgl); ?>
							<?php echo form_input('nama_slide'); ?>							
						</fieldset>
						<fieldset>
							<label>Upload Gambar</label>
							<?php echo form_upload('image'); ?>
						</fieldset>
						<fieldset>
							<label>Keterangan</label><font color="red"><?php echo form_error('keterangan'); ?></font>
							<?php echo form_textarea('keterangan'); ?>							
						</fieldset>
				</div>
			<footer>
				<div class="submit_link">
					<?php 
						echo form_submit('submit','Tambah'); 
						echo form_reset('reset','Reset'); 
					?>
				</div>
			</footer>
			<?php form_close(); ?>
			</div>
		</div>
		</article>
		<script language="javascript">
			function confirm_hapus(){
				if(confirm("Yakin Anda Akan Menghapus Data Ini\nTekan OK untuk melanjutkan penghapusan data")==true){
					return true;
				}else{
					return false;
				}
			}
		</script>