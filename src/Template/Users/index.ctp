<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Products'), ['controller'=>'Products','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Payments'), ['controller'=>'Payments','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Orders'), ['controller'=>'Orders','action' => 'index']) ?></li>
                        <?php echo 
                
        $this->Html->link('Logout',['controller'=>'Users','action'=>'logout'],['class'=>'nav-link']
      )
        ?>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
<div class="table-content">
    
    <h3>SEARCH ADMIN</h3>
    <?= $this->form->control('search');?>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('uid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('urole') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uphone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uemail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->uid) ?></td>
                <td><?= $this->Number->format($user->urole) ?></td>
                <td><?= h($user->uname) ?></td>
                <td><?= h($user->uphone) ?></td>
                <td><?= h($user->uemail) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->uid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->uid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->uid], ['confirm' => __('Are you sure you want to delete # {0}?', $user->uid)]) ?>
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
</div>

<script>
    $('document').ready(function(){
         $('#search').keyup(function(){
            var searchkey = $(this).val();
            searchTags( searchkey );
         });
        function searchTags( keyword ){
        var data = keyword;
        $.ajax({
                    method: 'get',
                    url : "<?php echo $this->Url->build( [ 'controller' => 'Users', 'action' => 'Search' ] ); ?>",
                    data: {keyword:data},
                    success: function( response )
                    {       
                       $( '.table-content' ).html(response);
                    }
                });
        };
    });
</script>
