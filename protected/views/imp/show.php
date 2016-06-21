<div>
	<?php 
	for($i=0; $i<15; $i++){
		?>
		<div class="lvl">
			<?php 
			for($j=1; $j<=3; $j++) {
				?>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/<?php echo ($i+1).$j.'.png'; ?>"
				<?php
				if($keys!=null)
				{
					if(isset($keys[$i]) && $keys[$i]==$j)
					{
						?>
						class="active" 
						<?php
					}
				}
				echo ' alt="<b>'.$data[($i+1).$j]['name'].'</b><br>'.$data[($i+1).$j]['info'].'"';
				?>
				>
				<?php
			}
			?>
		</div>
		<?php
	}
	?>
	<div class="clear"></div>
</div>
<div id="floatTip"></div>
