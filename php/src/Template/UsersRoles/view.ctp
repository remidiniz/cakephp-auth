<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Role'), ['action' => 'edit', $usersRole->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Role'), ['action' => 'delete', $usersRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersRole->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Roles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Role'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersRoles view large-9 medium-8 columns content">
    <h3><?= h($usersRole->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Role') ?></th>
            <td><?= $usersRole->has('role') ? $this->Html->link($usersRole->role->name, ['controller' => 'Roles', 'action' => 'view', $usersRole->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $usersRole->has('user') ? $this->Html->link($usersRole->user->id, ['controller' => 'Users', 'action' => 'view', $usersRole->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($usersRole->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($usersRole->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($usersRole->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Deleted') ?></th>
            <td><?= h($usersRole->deleted) ?></tr>
        </tr>
    </table>
</div>
