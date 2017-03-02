<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление отзыва</h2>
	</div>
<?php 

echo $this->Form->create('Review', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'ФИО:'));
?>

<div class="input select">
	<label for="ReviewServiceId">Услуга:</label>
	<select name="data[Review][service_id]" id="ReviewServiceId">
		<option value="0">-</option>
		<?php foreach($s_list as $k => $v):?>
			<option value="<?=$k?>"><?=$v?></option>
		<?php endforeach ?>
	</select>
</div>

<?
echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>