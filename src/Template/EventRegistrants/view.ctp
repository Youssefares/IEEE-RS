<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Event Registrant'), ['action' => 'edit', $eventRegistrant->ticket_number]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Event Registrant'), ['action' => 'delete', $eventRegistrant->ticket_number], ['confirm' => __('Are you sure you want to delete # {0}?', $eventRegistrant->ticket_number)]) ?> </li>
        <li><?= $this->Html->link(__('List Event Registrants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event Registrant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="eventRegistrants view large-9 medium-8 columns content">
    <h3><?= h($eventRegistrant->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Event') ?></th>
            <td><?= $eventRegistrant->has('event') ? $this->Html->link($eventRegistrant->event->title, ['controller' => 'Events', 'action' => 'view', $eventRegistrant->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($eventRegistrant->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($eventRegistrant->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile Number') ?></th>
            <td><?= h($eventRegistrant->mobile_number) ?></td>
        </tr>
        <tr>
            <th><?= __('University') ?></th>
            <td><?= h($eventRegistrant->university) ?></td>
        </tr>
        <tr>
            <th><?= __('Department') ?></th>
            <td><?= h($eventRegistrant->department) ?></td>
        </tr>
        <tr>
            <th><?= __('Academic Year') ?></th>
            <td><?= h($eventRegistrant->academic_year) ?></td>
        </tr>
        <tr>
            <th><?= __('Membership') ?></th>
            <td><?= h($eventRegistrant->membership) ?></td>
        </tr>
        <tr>
            <th><?= __('Registrer') ?></th>
            <td><?= h($eventRegistrant->registrer) ?></td>
        </tr>
        <tr>
            <th><?= __('Ticket Type') ?></th>
            <td><?= h($eventRegistrant->ticket_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Lunch') ?></th>
            <td><?= h($eventRegistrant->lunch) ?></td>
        </tr>
        <tr>
            <th><?= __('Ticket Number') ?></th>
            <td><?= $this->Number->format($eventRegistrant->ticket_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Fees') ?></th>
            <td><?= $this->Number->format($eventRegistrant->fees) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($eventRegistrant->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($eventRegistrant->modified) ?></td>
        </tr>
    </table>
</div>
