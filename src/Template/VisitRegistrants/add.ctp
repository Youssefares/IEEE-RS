<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Visit Registrants'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Visits'), ['controller' => 'Visits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Visit'), ['controller' => 'Visits', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="visitRegistrants form large-9 medium-8 columns content">
    <?= $this->Form->create($visitRegistrant) ?>
    <fieldset>
        <legend><?= __('Add Visit Registrant') ?></legend>
        <?php
            echo $this->Form->input('visit_id', ['options' => $visits]);
            echo $this->Form->input('name');
            echo $this->Form->input('email');
            echo $this->Form->input('mobile_number');
            echo $this->Form->input('department');
            echo $this->Form->input('academic_year');
            echo $this->Form->input('membership');
            echo $this->Form->input('registrer');
            echo $this->Form->input('notes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
