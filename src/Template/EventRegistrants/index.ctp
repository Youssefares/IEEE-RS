<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Event Registrant'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventRegistrants index large-9 medium-8 columns content">
    <h3><?= __('Event Registrants') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('ticket_number') ?></th>
                <th><?= $this->Paginator->sort('event_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('mobile_number') ?></th>
                <th><?= $this->Paginator->sort('university') ?></th>
                <th><?= $this->Paginator->sort('department') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eventRegistrants as $eventRegistrant): ?>
            <tr>
                <td><?= $this->Number->format($eventRegistrant->ticket_number) ?></td>
                <td><?= $eventRegistrant->has('event') ? $this->Html->link($eventRegistrant->event->title, ['controller' => 'Events', 'action' => 'view', $eventRegistrant->event->id]) : '' ?></td>
                <td><?= h($eventRegistrant->name) ?></td>
                <td><?= h($eventRegistrant->email) ?></td>
                <td><?= h($eventRegistrant->mobile_number) ?></td>
                <td><?= h($eventRegistrant->university) ?></td>
                <td><?= h($eventRegistrant->department) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $eventRegistrant->ticket_number]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $eventRegistrant->ticket_number]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $eventRegistrant->ticket_number], ['confirm' => __('Are you sure you want to delete # {0}?', $eventRegistrant->ticket_number)]) ?>
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
