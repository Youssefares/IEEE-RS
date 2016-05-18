<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Member'), ['action' => 'edit', $member->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Member'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="members view large-9 medium-8 columns content">
    <h3><?= h($member->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($member->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile No') ?></th>
            <td><?= h($member->mobile_no) ?></td>
        </tr>
        <tr>
            <th><?= __('Home No') ?></th>
            <td><?= h($member->home_no) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($member->email) ?></td>
        </tr>
        <tr>
            <th><?= __('University') ?></th>
            <td><?= h($member->university) ?></td>
        </tr>
        <tr>
            <th><?= __('Academic Year') ?></th>
            <td><?= h($member->academic_year) ?></td>
        </tr>
        <tr>
            <th><?= __('Department') ?></th>
            <td><?= h($member->department) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($member->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Socities') ?></th>
            <td><?= h($member->socities) ?></td>
        </tr>
        <tr>
            <th><?= __('Fees') ?></th>
            <td><?= h($member->fees) ?></td>
        </tr>
        <tr>
            <th><?= __('Mgm') ?></th>
            <td><?= h($member->mgm) ?></td>
        </tr>
        <tr>
            <th><?= __('Register Name') ?></th>
            <td><?= h($member->register_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Date') ?></th>
            <td><?= h($member->date) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($member->id) ?></td>
        </tr>
    </table>
</div>
