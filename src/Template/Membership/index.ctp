<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Membership'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="membership index large-9 medium-8 columns content">
    <h3><?= __('Membership') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('ID') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('mobile_no') ?></th>
                <th><?= $this->Paginator->sort('home_no') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('university') ?></th>
                <th><?= $this->Paginator->sort('academic_year') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($membership as $membership): ?>
            <tr>
                <td><?= $this->Number->format($membership->ID) ?></td>
                <td><?= h($membership->name) ?></td>
                <td><?= h($membership->mobile_no) ?></td>
                <td><?= h($membership->home_no) ?></td>
                <td><?= h($membership->email) ?></td>
                <td><?= h($membership->university) ?></td>
                <td><?= h($membership->academic_year) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $membership->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $membership->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $membership->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $membership->ID)]) ?>
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
