<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Users Role'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersRoles index large-9 medium-8 columns content">
    <h3><?= __('Users Roles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('role_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('deleted') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersRoles as $usersRole): ?>
            <tr>
                <td><?= $this->Number->format($usersRole->id) ?></td>
                <td><?= $usersRole->has('role') ? $this->Html->link($usersRole->role->name, ['controller' => 'Roles', 'action' => 'view', $usersRole->role->id]) : '' ?></td>
                <td><?= $usersRole->has('user') ? $this->Html->link($usersRole->user->id, ['controller' => 'Users', 'action' => 'view', $usersRole->user->id]) : '' ?></td>
                <td><?= h($usersRole->created) ?></td>
                <td><?= h($usersRole->modified) ?></td>
                <td><?= h($usersRole->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usersRole->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersRole->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersRole->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
