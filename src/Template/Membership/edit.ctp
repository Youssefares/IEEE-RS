<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $membership->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $membership->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Membership'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="membership form large-9 medium-8 columns content">
    <?= $this->Form->create($membership) ?>
    <fieldset>
        <legend><?= __('Edit Membership') ?></legend>
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
            echo $this->Form->input('Recruiter');
            echo $this->Form->input('RecruiterID');
            echo $this->Form->input('register_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
