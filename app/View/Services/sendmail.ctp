<?php 
echo $this->Form->create(array(
	'controller' => 'services',
	'action' => 'sendmail'
	));
 echo $this->Form->input('to');
 echo $this->Form->input('subject');
 echo $this->Form->input('message', array('type' => 'textarea'));
 echo $this->Form->end('send');
 ?>

