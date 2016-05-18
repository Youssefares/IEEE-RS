<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Seminar Registrant'), ['action' => 'edit', $seminarRegistrant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Seminar Registrant'), ['action' => 'delete', $seminarRegistrant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seminarRegistrant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Seminar Registrants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seminar Registrant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Seminars'), ['controller' => 'Seminars', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seminar'), ['controller' => 'Seminars', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="seminarRegistrants view large-9 medium-8 columns content">
    <h3><?= h($seminarRegistrant->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Seminar') ?></th>
            <td><?= $seminarRegistrant->has('seminar') ? $this->Html->link($seminarRegistrant->seminar->title, ['controller' => 'Seminars', 'action' => 'view', $seminarRegistrant->seminar->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($seminarRegistrant->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($seminarRegistrant->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile Number') ?></th>
            <td><?= h($seminarRegistrant->mobile_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Department') ?></th>
            <td><?= h($seminarRegistrant->department) ?></td>
        </tr>
        <tr>
            <th><?= __('Academic Year') ?></th>
            <td><?= h($seminarRegistrant->academic_year) ?></td>
        </tr>
        <tr>
            <th><?= __('Membership') ?></th>
            <td><?= h($seminarRegistrant->membership) ?></td>
        </tr>
        <tr>
            <th><?= __('Registrer') ?></th>
            <td><?= h($seminarRegistrant->registrer) ?></td>
        </tr>
        <tr>
            <th><?= __('Notes') ?></th>
            <td><?= h($seminarRegistrant->notes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($seminarRegistrant->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($seminarRegistrant->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($seminarRegistrant->modified) ?></td>
        </tr>
    </table>
</div>
