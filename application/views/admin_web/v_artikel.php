		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Edit Articles</h3>
		<ul class="tabs">
   			<li><a href="#tab1">Posts</a></li>
    		<li><a href="#tab2">Comments</a></li>
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th></th> 
    				<th>Entry Name</th> 
    				<th>Category</th> 
    				<th>Created On</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				<?php 
					if(empty($hasil)){
						 echo"<tr>
							<td></td>
							<td></td>";
						echo"<td><center>Artikel Masih Kosong</center></td>";
						echo"<td></td>
							<td></td>
							</tr>";
					}else{
						foreach($hasil as $data):
				?>
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td><?php echo $data->judul; ?></td> 
    				<td>Dahlan</td> 
    				<td><?php echo $data->tgl_posting; ?></td> 
    				<td>
						<a href="edit_artikel/<?php echo $data->id_artikel; ?>"><input type="image" src="<?php echo base_url() ?>berkas/images/img_admin/icn_edit.png" title="Edit"></a>
						<a href="delete_artikel/<?php echo $data->id_artikel; ?>"><input type="image" src="<?php echo base_url() ?>berkas/images/img_admin/icn_trash.png" title="Trash"></a>
					</td> 
				</tr> 
			<?php endforeach; ?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
<?php } ?>

			
			<div id="tab2" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead>
				<tr> 
   					<th>Judul</th> 
    				<th>Comment</th> 
    				<th>Posted by</th> 
    				<th>Posted On</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				<?php 
					if(empty($query)){
						echo"<tr>
							<td></td>
							<td></td>";
						echo"<td><center>Komentar Masih Kosong</center></td>";
						echo"<td></td>
							<td></td>
							</tr>";
					}else{
						foreach($query as $row):
				?>
				<tr> 
   					<td><?php echo $row->judul; ?></td> 
    				<td width="450"><?php echo $row->komentar; ?></td> 
    				<td><?php echo $row->nama; ?></td> 
    				<td><?php echo $row->tgl_komentar; ?></td> 
    				<td>
						<a href=""><input type="image" src="<?php echo base_url() ?>berkas/images/img_admin/icn_edit.png" title="Edit"></a>
						<a href="delete_komentar/<?php echo $row->id_komentar; ?>"><input type="image" src="<?php echo base_url() ?>berkas/images/img_admin/icn_trash.png" title="Trash"></a>
					</td> 
				</tr>
				<?php endforeach; ?>
			</tbody> 
			</table>

			</div>
			
		</div>
		
		</article>
<?php } ?>