		<article class="module width_full">
			<header><h3>You Profile <strong><?php echo $_SESSION['username']; ?></strong> </h3></header>
				<div class="module_content">
				<?php
					$q = mysql_query("SELECT * FROM admin WHERE username='$_SESSION[username]'");
					$jml = mysql_num_rows($q);
					while($row = mysql_fetch_array($q)){
						echo "Username : $row[username]<br />";
						echo "Nama Lengkap : $row[nama_lengkap]";
					}
				?>
				<?php
					/*if(empty($query)){
						echo"Enggak Ada";
					}else{
						foreach($query as $data):
						echo $data->nama_lengkap;
						echo $data->username;*/
						
				?>
					<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis consectetur purus
					sit amet fermentum. Maecenas faucibus mollis interdum. Maecenas faucibus mollis interdum. Cras justo odio, dapibus ac 
					facilisis in, egestas eget quam.</p>
				<?php // endforeach; } ?>
				</div>
		</article>