<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payment[]|\Cake\Collection\CollectionInterface $payments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Users'), ['controller'=>'Users','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Products'), ['controller'=>'Products','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Orders'), ['controller'=>'Orders','action' => 'index']) ?></li>
                        <?php echo 
                
        $this->Html->link('Logout',['controller'=>'Users','action'=>'logout'],['class'=>'nav-link']
      )
        ?>
    </ul>
</nav>
<div class="payments index large-9 medium-8 columns content">
    <h3><?= __('Payments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('payid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paymethod') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($payments as $payment): ?>
            <tr>
                <td><?= $this->Number->format($payment->payid) ?></td>
                <td><?= h($payment->paymethod) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $payment->payid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $payment->payid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $payment->payid], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->payid)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
