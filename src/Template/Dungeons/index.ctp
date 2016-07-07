<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dungeon'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dungeons index large-9 medium-8 columns content">
    <h3><?= __('Dungeons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('level') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dungeons as $dungeon): ?>
            <tr>
                <td><?= $this->Number->format($dungeon->id) ?></td>
                <td><?= h($dungeon->title) ?></td>
                <td><?= $this->Number->format($dungeon->level) ?></td>
                <td><?= h($dungeon->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dungeon->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dungeon->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dungeon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dungeon->id)]) ?>
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
