<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Registrant'), ['action' => 'edit', $registrant->No]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Registrant'), ['action' => 'delete', $registrant->No], ['confirm' => __('Are you sure you want to delete # {0}?', $registrant->No)]) ?> </li>
        <li><?= $this->Html->link(__('List Registrants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Registrant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="registrants view large-9 medium-8 columns content">
    <h3><?= h($registrant->No) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Course') ?></th>
            <td><?= $registrant->has('course') ? $this->Html->link($registrant->course->name, ['controller' => 'Courses', 'action' => 'view', $registrant->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($registrant->Name) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile Number') ?></th>
            <td><?= h($registrant->Mobile_Number) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($registrant->Email) ?></td>
        </tr>
        <tr>
            <th><?= __('Department') ?></th>
            <td><?= h($registrant->Department) ?></td>
        </tr>
        <tr>
            <th><?= __('Academic Year') ?></th>
            <td><?= h($registrant->Academic_Year) ?></td>
        </tr>
        <tr>
            <th><?= __('Membership Status') ?></th>
            <td><?= h($registrant->membership_status) ?></td>
        </tr>
        <tr>
            <th><?= __('Registrer') ?></th>
            <td><?= h($registrant->Registrer) ?></td>
        </tr>
        <tr>
            <th><?= __('Notes') ?></th>
            <td><?= h($registrant->Notes) ?></td>
        </tr>
        <tr>
            <th><?= __('No') ?></th>
            <td><?= $this->Number->format($registrant->No) ?></td>
        </tr>
        <tr>
            <th><?= __('Fees') ?></th>
            <td><?= $this->Number->format($registrant->fees) ?></td>
        </tr>
        <tr>
            <th><?= __('Ticket Number') ?></th>
            <td><?= $this->Number->format($registrant->Ticket_Number) ?></td>
        </tr>
    </table>
</div>
