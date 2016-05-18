<?= $this->Html->script('jscolor') ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Seminars'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Seminar Registrants'), ['controller' => 'SeminarRegistrants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seminar Registrant'), ['controller' => 'SeminarRegistrants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="seminars form large-9 medium-8 columns content">
    <?= $this->Form->create($seminar) ?>
    <fieldset>
        <legend><?= __('Add Seminar') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('color',['class'=>'jscolor']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
