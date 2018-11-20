<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $order
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="order index large-9 medium-8 columns content">
    <h3><?= __('Order') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('oid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('odate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('otime') ?></th>
                <th scope="col"><?= $this->Paginator->sort('oprice') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($order as $order): ?>
            <tr>
                <td><?= $this->Number->format($order->oid) ?></td>
                <td><?= $this->Number->format($order->payid) ?></td>
                <td><?= $this->Number->format($order->pid) ?></td>
                <td><?= $this->Number->format($order->uid) ?></td>
                <td><?= h($order->odate) ?></td>
                <td><?= h($order->otime) ?></td>
                <td><?= $this->Number->format($order->oprice) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $order->oid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->oid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->oid], ['confirm' => __('Are you sure you want to delete # {0}?', $order->oid)]) ?>
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
