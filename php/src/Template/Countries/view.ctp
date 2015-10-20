<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->iso]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->iso], ['confirm' => __('Are you sure you want to delete # {0}?', $country->iso)]) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="countries view large-9 medium-8 columns content">
    <h3><?= h($country->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Iso Code') ?></th>
            <td><?= h($country->iso_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($country->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($country->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Contacts') ?></h4>
        <?php if (!empty($country->contacts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('First Name') ?></th>
                <th><?= __('Last Name') ?></th>
                <th><?= __('Phone') ?></th>
                <th><?= __('Address') ?></th>
                <th><?= __('Post Code') ?></th>
                <th><?= __('City') ?></th>
                <th><?= __('Gender') ?></th>
                <th><?= __('Birth Date') ?></th>
                <th><?= __('Is Active') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Deleted') ?></th>
                <th><?= __('Profile Pic Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Latitude') ?></th>
                <th><?= __('Longitude') ?></th>
                <th><?= __('Country Id') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Skype') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($country->contacts as $contacts): ?>
            <tr>
                <td><?= h($contacts->id) ?></td>
                <td><?= h($contacts->first_name) ?></td>
                <td><?= h($contacts->last_name) ?></td>
                <td><?= h($contacts->phone) ?></td>
                <td><?= h($contacts->address) ?></td>
                <td><?= h($contacts->post_code) ?></td>
                <td><?= h($contacts->city) ?></td>
                <td><?= h($contacts->gender) ?></td>
                <td><?= h($contacts->birth_date) ?></td>
                <td><?= h($contacts->is_active) ?></td>
                <td><?= h($contacts->created) ?></td>
                <td><?= h($contacts->modified) ?></td>
                <td><?= h($contacts->deleted) ?></td>
                <td><?= h($contacts->profile_pic_id) ?></td>
                <td><?= h($contacts->user_id) ?></td>
                <td><?= h($contacts->latitude) ?></td>
                <td><?= h($contacts->longitude) ?></td>
                <td><?= h($contacts->country_id) ?></td>
                <td><?= h($contacts->email) ?></td>
                <td><?= h($contacts->skype) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contacts', 'action' => 'view', $contacts->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contacts', 'action' => 'edit', $contacts->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contacts', 'action' => 'delete', $contacts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacts->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
