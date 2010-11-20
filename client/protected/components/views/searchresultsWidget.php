<div class="scroll" id="searchresults"></div>
<div class="bar">
	<ul>
		<li><a class="find_similar" title="Find similar tracks" href="#">
			<img src="<?php echo Yii::app()->request->baseUrl ?>/images/similar_tracks.png" alt="last.fm" /></a>
		</li>
		<li class="right">
			<form onsubmit="return false;" action="">
				<fieldset>
				<?php
					echo CHtml::textField('query','',array('size'=>50));
					echo CHtml::ajaxSubmitButton('Find',
						Yii::app()->createUrl('track/search'),
						array(
							'update'=>'#searchresults',
							'beforeSend' => 'function(){'.
								'$("#searchresults").html(\'\');'.
								'$("#searchresults").addClass("loading");'.
							'}',
							'complete' => 'function(){'.
								'$("#searchresults").removeClass("loading");'.
							'}',
						),
						array('class'=>'button'));
				?>
				</fieldset>
			</form>
		</li>
	</ul>
</div>