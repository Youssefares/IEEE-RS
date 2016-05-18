<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Event Registrants'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventRegistrants form large-9 medium-8 columns content">
    <?= $this->Form->create($eventRegistrant) ?>
    <fieldset>
        <legend><?= __('Add Event Registrant') ?></legend>
        <?php
            echo $this->Form->input('event_id', ['options' => $events]);
            echo $this->Form->input('name');
            echo $this->Form->input('email');
            echo $this->Form->input('mobile_number');
            echo $this->Form->input('university');
            echo $this->Form->input('department');
            echo $this->Form->input('academic_year');
            echo $this->Form->input('membership');
            echo $this->Form->input('fees');
            echo $this->Form->input('registrer');
            echo $this->Form->input('ticket_type');
            echo $this->Form->input('lunch');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
