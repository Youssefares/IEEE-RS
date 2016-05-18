<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Seminar'), ['action' => 'edit', $seminar->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Seminar'), ['action' => 'delete', $seminar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seminar->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Seminars'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seminar'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Seminar Registrants'), ['controller' => 'SeminarRegistrants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seminar Registrant'), ['controller' => 'SeminarRegistrants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="seminars view large-9 medium-8 columns content">
    <h3><?= h($seminar->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($seminar->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Color') ?></th>
            <td><?= h($seminar->color) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($seminar->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($seminar->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($seminar->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Seminar Registrants') ?></h4>
        <?php if (!empty($seminar->seminar_registrants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Seminar Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Mobile Number') ?></th>
                <th><?= __('Department') ?></th>
                <th><?= __('Academic Year') ?></th>
                <th><?= __('Membership') ?></th>
                <th><?= __('Registrer') ?></th>
                <th><?= __('Notes') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($seminar->seminar_registrants as $seminarRegistrants): ?>
            <tr>
                <td><?= h($seminarRegistrants->id) ?></td>
                <td><?= h($seminarRegistrants->seminar_id) ?></td>
                <td><?= h($seminarRegistrants->name) ?></td>
                <td><?= h($seminarRegistrants->email) ?></td>
                <td><?= h($seminarRegistrants->mobile_number) ?></td>
                <td><?= h($seminarRegistrants->department) ?></td>
                <td><?= h($seminarRegistrants->academic_year) ?></td>
                <td><?= h($seminarRegistrants->membership) ?></td>
                <td><?= h($seminarRegistrants->registrer) ?></td>
                <td><?= h($seminarRegistrants->notes) ?></td>
                <td><?= h($seminarRegistrants->created) ?></td>
                <td><?= h($seminarRegistrants->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SeminarRegistrants', 'action' => 'view', $seminarRegistrants->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SeminarRegistrants', 'action' => 'edit', $seminarRegistrants->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SeminarRegistrants', 'action' => 'delete', $seminarRegistrants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seminarRegistrants->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
