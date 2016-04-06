<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $registrant->No],
                ['confirm' => __('Are you sure you want to delete # {0}?', $registrant->No)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Registrants'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="registrants form large-9 medium-8 columns content">
    <?= $this->Form->create($registrant) ?>
    <fieldset>
        <legend><?= __('Edit Registrant') ?></legend>
        <?php
            echo $this->Form->input('course_id', ['options' => $courses, 'empty' => true]);
            echo $this->Form->input('Name');
            echo $this->Form->input('Mobile_Number');
            echo $this->Form->input('Email');
            echo $this->Form->input('Department');
            echo $this->Form->input('Academic_Year');
            echo $this->Form->input('membership_status');
            echo $this->Form->input('fees');
            echo $this->Form->input('Ticket_Number');
            echo $this->Form->input('Registrer');
            echo $this->Form->input('Notes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
