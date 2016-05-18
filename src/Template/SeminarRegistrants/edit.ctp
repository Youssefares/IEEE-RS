<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $seminarRegistrant->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $seminarRegistrant->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Seminar Registrants'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Seminars'), ['controller' => 'Seminars', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seminar'), ['controller' => 'Seminars', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="seminarRegistrants form large-9 medium-8 columns content">
    <?= $this->Form->create($seminarRegistrant) ?>
    <fieldset>
        <legend><?= __('Edit Seminar Registrant') ?></legend>
        <?php
            echo $this->Form->input('seminar_id', ['options' => $seminars]);
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
