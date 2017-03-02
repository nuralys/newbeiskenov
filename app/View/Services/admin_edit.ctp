<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование</h2>
	</div>
<?php 
// debug($service);
// debug($s_list);
echo $this->Form->create('Service');
echo $this->Form->input('title', array('label' => 'Название:'));
?>
<div class="input select">
	<label for="ServiceParentId">Услуга:</label>
	<select name="data[Service][parent_id]" id="ServiceParentId">
		<option value="0">-</option>
		<?php foreach($s_list as $k => $v):?>
			<option <?php if($k == $service['Service']['parent_id']) echo ' selected'; ?> value="<?=$k?>"><?=$v?></option>
		<?php endforeach ?>
	</select>
</div>
<?php
echo $this->Form->input('body', array('id' => 'editor', 'label' => 'Текст:'));
?>
<div class="price_part">
<?
echo $this->Form->input('price', array('label' => 'Цена от:'));
echo $this->Form->input('price_to', array('label' => 'Цена до:'));
echo $this->Form->input('kl_slova', array('label' => 'Ключевые слова:'));
echo $this->Form->input('metaDescription', array('label' => 'Описание:'));
?>
</div>
<?
echo $this->Form->end('Сохранить');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>