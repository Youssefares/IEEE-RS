<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Visit'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Visit Registrants'), ['controller' => 'VisitRegistrants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Visit Registrant'), ['controller' => 'VisitRegistrants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="visits index large-9 medium-8 columns content">
    <h3><?= __('Visits') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('color') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($visits as $visit): ?>
            <tr>
                <td><?= $this->Number->format($visit->id) ?></td>
                <td><?= h($visit->title) ?></td>
                <td><?= h($visit->color) ?></td>
                <td><?= h($visit->created) ?></td>
                <td><?= h($visit->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $visit->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $visit->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $visit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visit->id)]) ?>
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
