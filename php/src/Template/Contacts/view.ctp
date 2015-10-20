<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contacts view large-9 medium-8 columns content">
    <h3><?= h($contact->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('First Name') ?></th>
            <td><?= h($contact->first_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Last Name') ?></th>
            <td><?= h($contact->last_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($contact->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Post Code') ?></th>
            <td><?= h($contact->post_code) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($contact->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Gender') ?></th>
            <td><?= h($contact->gender) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $contact->has('user') ? $this->Html->link($contact->user->id, ['controller' => 'Users', 'action' => 'view', $contact->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= $contact->has('country') ? $this->Html->link($contact->country->name, ['controller' => 'Countries', 'action' => 'view', $contact->country->iso]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($contact->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Skype') ?></th>
            <td><?= h($contact->skype) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($contact->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= $this->Number->format($contact->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Profile Pic Id') ?></th>
            <td><?= $this->Number->format($contact->profile_pic_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Latitude') ?></th>
            <td><?= $this->Number->format($contact->latitude) ?></td>
        </tr>
        <tr>
            <th><?= __('Longitude') ?></th>
            <td><?= $this->Number->format($contact->longitude) ?></td>
        </tr>
        <tr>
            <th><?= __('Birth Date') ?></th>
            <td><?= h($contact->birth_date) ?></tr>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($contact->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($contact->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Deleted') ?></th>
            <td><?= h($contact->deleted) ?></tr>
        </tr>
        <tr>
            <th><?= __('Is Active') ?></th>
            <td><?= $contact->is_active ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
