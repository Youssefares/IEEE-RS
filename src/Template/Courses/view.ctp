<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Course'), ['action' => 'edit', $course->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Course'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Registrants'), ['controller' => 'Registrants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Registrant'), ['controller' => 'Registrants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="courses view large-9 medium-8 columns content">
    <h3><?= h($course->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($course->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($course->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Remaining Seats') ?></th>
            <td><?= $this->Number->format($course->remaining_seats) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Registrants') ?></h4>
        <?php if (!empty($course->registrants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('No') ?></th>
                <th><?= __('Course Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Mobile Number') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Department') ?></th>
                <th><?= __('Academic Year') ?></th>
                <th><?= __('Membership Status') ?></th>
                <th><?= __('Fees') ?></th>
                <th><?= __('Ticket Number') ?></th>
                <th><?= __('Registrer') ?></th>
                <th><?= __('Notes') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($course->registrants as $registrants): ?>
            <tr>
                <td><?= h($registrants->No) ?></td>
                <td><?= h($registrants->course_id) ?></td>
                <td><?= h($registrants->Name) ?></td>
                <td><?= h($registrants->Mobile_Number) ?></td>
                <td><?= h($registrants->Email) ?></td>
                <td><?= h($registrants->Department) ?></td>
                <td><?= h($registrants->Academic_Year) ?></td>
                <td><?= h($registrants->membership_status) ?></td>
                <td><?= h($registrants->fees) ?></td>
                <td><?= h($registrants->Ticket_Number) ?></td>
                <td><?= h($registrants->Registrer) ?></td>
                <td><?= h($registrants->Notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Registrants', 'action' => 'view', $registrants->No]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Registrants', 'action' => 'edit', $registrants->No]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Registrants', 'action' => 'delete', $registrants->No], ['confirm' => __('Are you sure you want to delete # {0}?', $registrants->No)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
