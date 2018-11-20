<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->uid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->uid], ['confirm' => __('Are you sure you want to delete # {0}?', $user->uid)]) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="user view large-9 medium-8 columns content">
    <h3><?= h($user->uid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uname') ?></th>
            <td><?= h($user->uname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uphone') ?></th>
            <td><?= h($user->uphone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uemail') ?></th>
            <td><?= h($user->uemail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uid') ?></th>
            <td><?= $this->Number->format($user->uid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Urole') ?></th>
            <td><?= $this->Number->format($user->urole) ?></td>
        </tr>
    </table>
</div>
