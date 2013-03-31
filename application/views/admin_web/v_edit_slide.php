<article class="module width_full">
			<header><h3>Update Data Slide</h3></header>
				<div class="module_content">
						<?php 
							foreach($detail_slide as $hasil):
							echo form_open_multipart('admin_web/c_slide/save');
							$tgl = date('Y-m-d');
						?>
						<fieldset>
							<label>Nama Slide</label>							
							<?php echo form_hidden('id_slide',$hasil->id_slide); echo $hasil->id_slide;?>
							<?php echo form_hidden('tgl_upload',$tgl); ?>
							<?php echo form_input('nama_slide',$hasil->nama_slide); ?>
						</fieldset>
						<fieldset>
							<label>Image Slide</label><br /><br />&nbsp;&nbsp;&nbsp;
							<left><img src="<?php echo base_url()?>/images/<?php echo $hasil->image; ?>" width="150" height="120"></left>
							<?php echo form_upload('image'); ?>
						</fieldset>
						<fieldset>
							<label>Keterangan</label>
							<?php echo form_textarea('keterangan',$hasil->keterangan);?>
						</fieldset>
				</div>
			<footer>
				<div class="submit_link">
					<?php echo form_submit('submit','Update'); ?>
					<input type="button" value="Cancel" onclick="self.history.back()" />
				</div>
			</footer>
			<?php form_close(); endforeach;?>
</article>