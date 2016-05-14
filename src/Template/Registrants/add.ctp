<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Registrants'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="registrants form large-9 medium-8 columns content">
    <?= $this->Form->create($registrant) ?>
    <fieldset>
        <legend><?= __('Add Registrant') ?></legend>
        <?php $courses->applyOptions(['conditions'=>['remaining_seats >' => '0']]);?>
        <?php
            echo $this->Form->input('course_id', ['options' => $courses]);
            echo $this->Form->input('Name');
            echo $this->Form->input('Mobile_Number');
            echo $this->Form->input('Email');
            echo $this->Form->input('Department');
            echo $this->Form->input('Academic_Year');
            echo $this->Form->input('membership_status',['options' => ['Non-member','Member']]);
            echo $this->Form->input('fees');
            echo $this->Form->input('Registrer');
            echo $this->Form->input('Notes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
