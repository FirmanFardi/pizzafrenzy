<h1> Login <h1>

<?= $this->Form->create() ?>
<?= $this->Form->control('username') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->button('Login Admin/Customer') ?>
<br>
<?php echo $this->Html->link(
              'Sign up',
              ['controller' => 'Users', 'action' => 'add', '_full' => true],
              ['class'=>'button']
               ); ?>
<?= $this->Form->end() ?>


