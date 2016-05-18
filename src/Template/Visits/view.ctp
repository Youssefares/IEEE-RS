<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Visit'), ['action' => 'edit', $visit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Visit'), ['action' => 'delete', $visit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Visits'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Visit Registrants'), ['controller' => 'VisitRegistrants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visit Registrant'), ['controller' => 'VisitRegistrants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="visits view large-9 medium-8 columns content">
    <h3><?= h($visit->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($visit->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Color') ?></th>
            <td><?= h($visit->color) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($visit->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($visit->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($visit->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Visit Registrants') ?></h4>
        <?php if (!empty($visit->visit_registrants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Visit Id') ?></th>
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
            <?php foreach ($visit->visit_registrants as $visitRegistrants): ?>
            <tr>
                <td><?= h($visitRegistrants->id) ?></td>
                <td><?= h($visitRegistrants->visit_id) ?></td>
                <td><?= h($visitRegistrants->name) ?></td>
                <td><?= h($visitRegistrants->email) ?></td>
                <td><?= h($visitRegistrants->mobile_number) ?></td>
                <td><?= h($visitRegistrants->department) ?></td>
                <td><?= h($visitRegistrants->academic_year) ?></td>
                <td><?= h($visitRegistrants->membership) ?></td>
                <td><?= h($visitRegistrants->registrer) ?></td>
                <td><?= h($visitRegistrants->notes) ?></td>
                <td><?= h($visitRegistrants->created) ?></td>
                <td><?= h($visitRegistrants->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'VisitRegistrants', 'action' => 'view', $visitRegistrants->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'VisitRegistrants', 'action' => 'edit', $visitRegistrants->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'VisitRegistrants', 'action' => 'delete', $visitRegistrants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visitRegistrants->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
