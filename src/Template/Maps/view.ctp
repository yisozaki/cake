<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Map'), ['action' => 'edit', $map->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Map'), ['action' => 'delete', $map->id], ['confirm' => __('Are you sure you want to delete # {0}?', $map->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Maps'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Map'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="maps view large-9 medium-8 columns content">
    <h3><?= h($map->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($map->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Dungeion Id') ?></th>
            <td><?= $this->Number->format($map->dungeion_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Coord') ?></th>
            <td><?= $this->Number->format($map->coord) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($map->created) ?></td>
        </tr>
    </table>
</div>
