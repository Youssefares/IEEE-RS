<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Registrant'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="registrants index large-9 medium-8 columns content">
    <h3><?= __('Registrants') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('No') ?></th>
                <th><?= $this->Paginator->sort('course_id') ?></th>
                <th><?= $this->Paginator->sort('Name') ?></th>
                <th><?= $this->Paginator->sort('Mobile_Number') ?></th>
                <th><?= $this->Paginator->sort('Email') ?></th>
                <th><?= $this->Paginator->sort('Department') ?></th>
                <th><?= $this->Paginator->sort('Academic_Year') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registrants as $registrant): ?>
            <tr>
                <td><?= $this->Number->format($registrant->No) ?></td>
                <td><?= $registrant->has('course') ? $this->Html->link($registrant->course->name, ['controller' => 'Courses', 'action' => 'view', $registrant->course->id]) : '' ?></td>
                <td><?= h($registrant->Name) ?></td>
                <td><?= h($registrant->Mobile_Number) ?></td>
                <td><?= h($registrant->Email) ?></td>
                <td><?= h($registrant->Department) ?></td>
                <td><?= h($registrant->Academic_Year) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $registrant->No]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $registrant->No]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $registrant->No], ['confirm' => __('Are you sure you want to delete # {0}?', $registrant->No)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
