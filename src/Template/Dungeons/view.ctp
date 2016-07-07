<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dungeon'), ['action' => 'edit', $dungeon->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dungeon'), ['action' => 'delete', $dungeon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dungeon->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dungeons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dungeon'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dungeons view large-9 medium-8 columns content">
    <h3><?= h($dungeon->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($dungeon->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($dungeon->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Level') ?></th>
            <td><?= $this->Number->format($dungeon->level) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($dungeon->created) ?></td>
        </tr>
    </table>
</div>
