<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Visit Registrant'), ['action' => 'edit', $visitRegistrant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Visit Registrant'), ['action' => 'delete', $visitRegistrant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visitRegistrant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Visit Registrants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visit Registrant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Visits'), ['controller' => 'Visits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visit'), ['controller' => 'Visits', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="visitRegistrants view large-9 medium-8 columns content">
    <h3><?= h($visitRegistrant->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Visit') ?></th>
            <td><?= $visitRegistrant->has('visit') ? $this->Html->link($visitRegistrant->visit->title, ['controller' => 'Visits', 'action' => 'view', $visitRegistrant->visit->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($visitRegistrant->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($visitRegistrant->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile Number') ?></th>
            <td><?= h($visitRegistrant->mobile_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Department') ?></th>
            <td><?= h($visitRegistrant->department) ?></td>
        </tr>
        <tr>
            <th><?= __('Academic Year') ?></th>
            <td><?= h($visitRegistrant->academic_year) ?></td>
        </tr>
        <tr>
            <th><?= __('Membership') ?></th>
            <td><?= h($visitRegistrant->membership) ?></td>
        </tr>
        <tr>
            <th><?= __('Registrer') ?></th>
            <td><?= h($visitRegistrant->registrer) ?></td>
        </tr>
        <tr>
            <th><?= __('Notes') ?></th>
            <td><?= h($visitRegistrant->notes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($visitRegistrant->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($visitRegistrant->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($visitRegistrant->modified) ?></td>
        </tr>
    </table>
</div>
