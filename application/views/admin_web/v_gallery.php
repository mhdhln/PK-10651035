<div id="column_w610">			
	<div class="section_01">
		<div class="top"></div> 
		<div id="gallery">
			<?php if(isset($images) && count($images)):?>
				<?php foreach($images as $img):?>
				<div class="thumb">
				<a href="<?php echo $img['url']; ?>">
					<img src="<?php echo $img['thumb_url']; ?>" />
				</a>
				</div>
				<?php endforeach; else:?>
					<p>Silahkan upload gambar</p>
				<?php endif; ?>
		<div class="bottom"></div>
		</div>
	</div>	
</div>
	