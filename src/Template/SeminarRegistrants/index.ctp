<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Seminar Registrant'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seminars'), ['controller' => 'Seminars', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seminar'), ['controller' => 'Seminars', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="seminarRegistrants index large-9 medium-8 columns content">
    <h3><?= __('Seminar Registrants') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('seminar_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('mobile_number') ?></th>
                <th><?= $this->Paginator->sort('department') ?></th>
                <th><?= $this->Paginator->sort('academic_year') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($seminarRegistrants as $seminarRegistrant): ?>
            <tr>
                <td><?= $this->Number->format($seminarRegistrant->id) ?></td>
                <td><?= $seminarRegistrant->has('seminar') ? $this->Html->link($seminarRegistrant->seminar->title, ['controller' => 'Seminars', 'action' => 'view', $seminarRegistrant->seminar->id]) : '' ?></td>
                <td><?= h($seminarRegistrant->name) ?></td>
                <td><?= h($seminarRegistrant->email) ?></td>
                <td><?= h($seminarRegistrant->mobile_number) ?></td>
                <td><?= h($seminarRegistrant->department) ?></td>
                <td><?= h($seminarRegistrant->academic_year) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $seminarRegistrant->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $seminarRegistrant->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $seminarRegistrant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seminarRegistrant->id)]) ?>
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
