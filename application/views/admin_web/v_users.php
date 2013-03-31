		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">View Users</h3>
		<ul class="tabs">
   			<li><a href="#tab1">Posts</a></li>
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th>Nama Lengkap</th> 
    				<th>Username</th> 
    				<th>Alamat</th> 
    				<th>Email</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				<?php 
					if(empty($hasil)){
						 echo"<tr>
						<td></td>";
						echo"<td><center>Artikel Masih Kosong</center></td>";
						echo"<td></td>
						</tr>";
					}else{
						foreach($hasil as $data):
				?>
				<tr> 
    				<td><?php echo $data->nama_lengkap; ?></td> 
    				<td><?php echo $data->username; ?></td> 
    				<td><?php echo $data->alamat; ?></td> 
    				<td><?php echo $data->email; ?></td> 
    				<td>
						<a href="c_users/edit_users/<?php echo $data->id_admin; ?>"><input type="image" src="<?php echo base_url() ?>berkas/images/img_admin/icn_edit.png" title="Edit"></a>
						<a href="c_users/delete_users/<?php echo $data->id_admin; ?>"><input type="image" src="<?php echo base_url() ?>berkas/images/img_admin/icn_trash.png" title="Trash"></a>
					</td> 
				</tr> 
			<?php endforeach; ?>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
		</div>
		
		</article>
<?php } ?>