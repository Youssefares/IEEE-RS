<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Membership'), ['action' => 'edit', $membership->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Membership'), ['action' => 'delete', $membership->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $membership->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Membership'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Membership'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="membership view large-9 medium-8 columns content">
    <h3><?= h($membership->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($membership->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile No') ?></th>
            <td><?= h($membership->mobile_no) ?></td>
        </tr>
        <tr>
            <th><?= __('Home No') ?></th>
            <td><?= h($membership->home_no) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($membership->email) ?></td>
        </tr>
        <tr>
            <th><?= __('University') ?></th>
            <td><?= h($membership->university) ?></td>
        </tr>
        <tr>
            <th><?= __('Academic Year') ?></th>
            <td><?= h($membership->academic_year) ?></td>
        </tr>
        <tr>
            <th><?= __('Department') ?></th>
            <td><?= h($membership->department) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($membership->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Socities') ?></th>
            <td><?= h($membership->socities) ?></td>
        </tr>
        <tr>
            <th><?= __('Fees') ?></th>
            <td><?= h($membership->fees) ?></td>
        </tr>
        <tr>
            <th><?= __('Mgm') ?></th>
            <td><?= h($membership->mgm) ?></td>
        </tr>
        <tr>
            <th><?= __('Recruiter') ?></th>
            <td><?= h($membership->Recruiter) ?></td>
        </tr>
        <tr>
            <th><?= __('RecruiterID') ?></th>
            <td><?= h($membership->RecruiterID) ?></td>
        </tr>
        <tr>
            <th><?= __('Register Name') ?></th>
            <td><?= h($membership->register_name) ?></td>
        </tr>
        <tr>
            <th><?= __('ID') ?></th>
            <td><?= $this->Number->format($membership->ID) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($membership->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($membership->modified) ?></td>
        </tr>
    </table>
</div>
