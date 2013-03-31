<article class="module width_full">
			<header><h3>Update Articles</h3></header>
				<div class="module_content">
						<?php echo form_open('admin_web/c_users/edit_users/'.$hasil->id_admin);?>
						<fieldset>
							<label>Nama Lengkap</label>
							<?php echo form_input('nama_lengkap',$hasil->nama_lengkap); ?>
						</fieldset>
						<fieldset>
							<label>Username</label>
							<?php echo form_input('username',$hasil->username); ?>
						</fieldset>
						<fieldset>
							<label>Password</label>
							<?php echo form_password('password',$hasil->password); ?>
						</fieldset>
						<fieldset>
							<label>Alamat</label>
							<?php echo form_input('alamat',$hasil->alamat); ?>
						</fieldset>
						<fieldset>
							<label>Email</label>
							<?php echo form_input('emai;',$hasil->email); ?>
						</fieldset>
				</div>
			<footer>
				<div class="submit_link">
					<select>
						<option>Draft</option>
						<option>Published</option>
					</select>
					<?php echo form_submit('submit','Update'); ?>
					<input type="button" value="Cancel" onclick="self.history.back()" />
				</div>
			</footer>
			<?php form_close(); ?>
		</article>