<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Users'), ['controller'=>'Users','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Payments'), ['controller'=>'Payments','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Orders'), ['controller'=>'Orders','action' => 'index']) ?></li>
    </ul>
</nav>
<div class="product index large-9 medium-8 columns content">
    <h3><?= __('Product') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('pid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pquantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ptopping') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pcategory') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->pid) ?></td>
                <td><?= h($product->pname) ?></td>
                <td><?= $this->Number->format($product->pquantity) ?></td>
                <td><?= h($product->ptopping) ?></td>
                <td><?= h($product->pcategory) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->pid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->pid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->pid], ['confirm' => __('Are you sure you want to delete # {0}?', $product->pid)]) ?>
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
