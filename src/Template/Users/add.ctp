<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
//important to disable cakephp bootstrap so that u can apply md bootstrap
/*<?= $this->Form->create($user) ?>*/
$this->layout = false;
?>
<?= $this->Html->css('material-compiled.css') ?>
<body style="margin-top:10px;background-image: url('http://localhost/pizza/webroot/img/back4.png');background-size: 768px 700px">
<div class="container">
    <div class="row">
    <div class="col-sm-7 offset-md-2">
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">

    <?= $this->Form->create($user) ?>

    <fieldset>
        
            <h5 class="card-header info-color white-text text-center py-4">
        <strong>Sign up</strong>
    </h5>
    <br>
            <select name="urole" class="browser-default custom-select">
  <option selected>Role</option>
  <option value="1">1 //Admin</option>
  <option value="2">2 //Customer</option>
        </select>
        <br>
        <?php

            echo $this->Form->control('uname',array("placeholder"=>"Name",'label'=>''));
            // for mdboostrap
            //echo $this->Form->control(('uname'),['class'=>'form-control mb-4']);
            echo $this->Form->control('uphone',array("placeholder"=>"Phone",'label'=>''));
            echo $this->Form->control('uemail',array("placeholder"=>"Email",'label'=>''));
            echo $this->Form->control('username',array("placeholder"=>"Username",'label'=>''));
            echo $this->Form->control('password',array("placeholder"=>"Password",'label'=>''));

            


        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    <?= $this->Html->script('material-compiled.js') ?>
</div>
</div>

</div>
</div>
</body>





<!-- Material form register -->
<!-- Default form login -->
<!-- Default form register -->


<?= $this->Html->script('material-compiled.js') ?>
<?= $this->Html->script('bootstrap.js') ?>
<?= $this->Html->script('bootstrap.min.js') ?>
<?= $this->Html->script('mdb.js') ?>
<?= $this->Html->script('mdb.min.js') ?>
</body>
<script type="text/javascript">


   $(document).ready(function() {
            $('.mdb-select').material_select();
                // SideNav Button Initialization
$(".button-collapse").sideNav();
// SideNav Scrollbar Initialization
var sideNavScrollbar = document.querySelector('.custom-scrollbar');
Ps.initialize(sideNavScrollbar);
        })
</script>