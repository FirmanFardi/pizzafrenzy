<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->pid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->pid], ['confirm' => __('Are you sure you want to delete # {0}?', $product->pid)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->pid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pname') ?></th>
            <td><?= h($product->pname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ptopping') ?></th>
            <td><?= h($product->ptopping) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pcategory') ?></th>
            <td><?= h($product->pcategory) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pid') ?></th>
            <td><?= $this->Number->format($product->pid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pquantity') ?></th>
            <td><?= $this->Number->format($product->pquantity) ?></td>
        </tr>
    </table>
</div>
