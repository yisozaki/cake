<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dungeons'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dungeons form large-9 medium-8 columns content">
    <?= $this->Form->create($dungeon) ?>
    <fieldset>
        <legend><?= __('Add Dungeon') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('level');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
