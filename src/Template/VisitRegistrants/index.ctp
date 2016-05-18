<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Visit Registrant'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Visits'), ['controller' => 'Visits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Visit'), ['controller' => 'Visits', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="visitRegistrants index large-9 medium-8 columns content">
    <h3><?= __('Visit Registrants') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('visit_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('mobile_number') ?></th>
                <th><?= $this->Paginator->sort('department') ?></th>
                <th><?= $this->Paginator->sort('academic_year') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($visitRegistrants as $visitRegistrant): ?>
            <tr>
                <td><?= $this->Number->format($visitRegistrant->id) ?></td>
                <td><?= $visitRegistrant->has('visit') ? $this->Html->link($visitRegistrant->visit->title, ['controller' => 'Visits', 'action' => 'view', $visitRegistrant->visit->id]) : '' ?></td>
                <td><?= h($visitRegistrant->name) ?></td>
                <td><?= h($visitRegistrant->email) ?></td>
                <td><?= h($visitRegistrant->mobile_number) ?></td>
                <td><?= h($visitRegistrant->department) ?></td>
                <td><?= h($visitRegistrant->academic_year) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $visitRegistrant->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $visitRegistrant->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $visitRegistrant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visitRegistrant->id)]) ?>
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
