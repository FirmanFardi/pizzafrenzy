<?php
/**
* @var \App\View\AppView $this
*/

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<ul class="side-nav">
<li class="heading"><?= __('Actions') ?></li>
<li><?= $this->Html->link(__('Announcement'), ['action' => 'announce']) ?></li> 
<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
</ul>
</nav>
<div class="users form large-9 medium-8 columns content">
<?= $this->Form->create($user) ?>
<fieldset>
<legend><?= __('Search Admin') ?></legend>
<?php
echo $this->Form->control('search', ['label'=>'Please enter name/username to search']);
?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
<?php
if($user){
?>
Here are the results of your search: <br><br>
<?php
	foreach($user as $users){
		echo $users['uname'] . " "
		
		. $this->Html->link(__('Remove privileges'),['action' => 'unadmin', $users['uid']])
		."<br>";
	}
}
?>
</div>