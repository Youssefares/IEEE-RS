<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Members'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="members form large-9 medium-8 columns content">
    <?= $this->Form->create($member) ?>
    <fieldset>
        <legend><?= __('Add Member') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('mobile_no');
            echo $this->Form->input('home_no');
            echo $this->Form->input('email');
            echo $this->Form->input('university');
            echo $this->Form->input('academic_year');
            echo $this->Form->input('department');
            echo $this->Form->input('address');
            echo $this->Form->input('socities');
            echo $this->Form->input('fees');
            echo $this->Form->input('mgm');
            echo $this->Form->input('register_name');
            echo $this->Form->input('date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
