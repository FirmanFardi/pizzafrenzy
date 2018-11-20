<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $order->oid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $order->oid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Order'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="order form large-9 medium-8 columns content">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Edit Order') ?></legend>
        <?php
            echo $this->Form->control('payid');
            echo $this->Form->control('pid');
            echo $this->Form->control('uid');
            echo $this->Form->control('odate');
            echo $this->Form->control('otime');
            echo $this->Form->control('oprice');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
