<article class="module width_full">
			<header><h3>Update Articles</h3></header>
				<div class="module_content">
						<?php echo form_open('admin_web/c_users/tambah_users');?>
						<fieldset>
							<label>Nama Lengkap</label>
							<?php echo form_input('nama_lengkap'); ?>
						</fieldset>
						<fieldset>
							<label>Username</label>
							<?php echo form_input('username'); ?>
						</fieldset>
						<fieldset>
							<label>Password</label>
							<?php echo form_password('password'); ?>
						</fieldset>
						<fieldset>
							<label>Alamat</label>
							<?php echo form_input('alamat'); ?>
						</fieldset>
						<fieldset>
							<label>Email</label>
							<?php echo form_input('email'); ?>
						</fieldset>
				</div>
			<footer>
				<div class="submit_link">
					<?php echo form_submit('submit','Insert'); ?>
					<?php echo form_submit('reset','Reset'); ?>
				</div>
			</footer>
			<?php form_close(); ?>
		</article>