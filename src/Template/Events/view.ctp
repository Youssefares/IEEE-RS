<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Event Registrants'), ['controller' => 'EventRegistrants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event Registrant'), ['controller' => 'EventRegistrants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="events view large-9 medium-8 columns content">
    <h3><?= h($event->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($event->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Color') ?></th>
            <td><?= h($event->color) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($event->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($event->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($event->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Event Registrants') ?></h4>
        <?php if (!empty($event->event_registrants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Ticket Number') ?></th>
                <th><?= __('Event Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Mobile Number') ?></th>
                <th><?= __('University') ?></th>
                <th><?= __('Department') ?></th>
                <th><?= __('Academic Year') ?></th>
                <th><?= __('Membership') ?></th>
                <th><?= __('Fees') ?></th>
                <th><?= __('Registrer') ?></th>
                <th><?= __('Ticket Type') ?></th>
                <th><?= __('Lunch') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($event->event_registrants as $eventRegistrants): ?>
            <tr>
                <td><?= h($eventRegistrants->ticket_number) ?></td>
                <td><?= h($eventRegistrants->event_id) ?></td>
                <td><?= h($eventRegistrants->name) ?></td>
                <td><?= h($eventRegistrants->email) ?></td>
                <td><?= h($eventRegistrants->mobile_number) ?></td>
                <td><?= h($eventRegistrants->university) ?></td>
                <td><?= h($eventRegistrants->department) ?></td>
                <td><?= h($eventRegistrants->academic_year) ?></td>
                <td><?= h($eventRegistrants->membership) ?></td>
                <td><?= h($eventRegistrants->fees) ?></td>
                <td><?= h($eventRegistrants->registrer) ?></td>
                <td><?= h($eventRegistrants->ticket_type) ?></td>
                <td><?= h($eventRegistrants->lunch) ?></td>
                <td><?= h($eventRegistrants->created) ?></td>
                <td><?= h($eventRegistrants->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EventRegistrants', 'action' => 'view', $eventRegistrants->ticket_number]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EventRegistrants', 'action' => 'edit', $eventRegistrants->ticket_number]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EventRegistrants', 'action' => 'delete', $eventRegistrants->ticket_number], ['confirm' => __('Are you sure you want to delete # {0}?', $eventRegistrants->ticket_number)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
