<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Users'), ['controller'=>'Users','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Products'), ['controller'=>'Products','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Payments'), ['controller'=>'Payments','action' => 'index']) ?></li>
                <?php echo 
                
        $this->Html->link('Logout',['controller'=>'Users','action'=>'logout'],['class'=>'nav-link']
      )
        ?>
    </ul>
</nav>
<div class="orders index large-9 medium-8 columns content">
    <h3><?= __('Orders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('oid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('oprice') ?></th>
                <th scope="col"><?= $this->Paginator->sort('oquantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('oaddress') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ocrust') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
            <tr>
                <td><?= $this->Number->format($order->oid) ?></td>
                <td><?= $this->Number->format($order->payid) ?></td>
                <td><?= $this->Number->format($order->pid) ?></td>
                <td><?= $this->Number->format($order->uid) ?></td>
                <td><?= $this->Number->format($order->oprice) ?></td>
                <td><?= $this->Number->format($order->oquantity) ?></td>
                <td><?= h($order->oaddress) ?></td>
                <td><?= h($order->ocrust) ?></td>
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
