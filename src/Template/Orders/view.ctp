<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->oid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->oid], ['confirm' => __('Are you sure you want to delete # {0}?', $order->oid)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orders view large-9 medium-8 columns content">
    <h3><?= h($order->oid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Oid') ?></th>
            <td><?= $this->Number->format($order->oid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payid') ?></th>
            <td><?= $this->Number->format($order->payid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pid') ?></th>
            <td><?= $this->Number->format($order->pid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uid') ?></th>
            <td><?= $this->Number->format($order->uid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Oprice') ?></th>
            <td><?= $this->Number->format($order->oprice) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Odate') ?></th>
            <td><?= h($order->odate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Otime') ?></th>
            <td><?= h($order->otime) ?></td>
        </tr>
    </table>
</div>
