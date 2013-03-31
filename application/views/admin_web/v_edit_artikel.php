<article class="module width_full">
			<header><h3>Update Articles</h3></header>
				<div class="module_content">
						<?php echo form_open('admin_web/c_content/edit_artikel/'.$hasil->id_artikel);?>
						<fieldset>
							<label>Post Title</label>
							
							<?php echo form_input('judul',$hasil->judul); ?>
						</fieldset>
						<fieldset>
							<label>Content</label>
							<?php echo form_textarea('isi',$hasil->isi);
							//echo"<textarea rows='12'></textarea>";?>
						</fieldset>
						<fieldset style="width:48%; float:left; margin-right: 3%;">
							<label>Category</label>
							<select style="width:92%;">
								<option>Articles</option>
								<option>Tutorials</option>
								<option>Freebies</option>
							</select>
						</fieldset>
						<fieldset style="width:48%; float:left;">
							<label>Tags</label>
							<input type="text" style="width:92%;">
						</fieldset><div class="clear"></div>
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
		</article><!-- end of post new article -->