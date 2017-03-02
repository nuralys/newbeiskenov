<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование</h2>
	</div>
<?php 
// debug($service);
// debug($s_list);
echo $this->Form->create('Review');
echo $this->Form->input('title', array('label' => 'Название:'));
?>
<div class="input select">
	<label for="ReviewServiceId">Услуга:</label>
	<select name="data[Review][service_id]" id="ReviewServiceId">
		<option value="0">-</option>
		<?php foreach($s_list as $k => $v):?>
			<option <?php if($k == $data['Review']['service_id']) echo ' selected'; ?> value="<?=$k?>"><?=$v?></option>
		<?php endforeach ?>
	</select>
</div>
<?php
echo $this->Form->input('body', array('id' => 'editor', 'label' => 'Текст:'));

echo $this->Form->end('Сохранить');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>