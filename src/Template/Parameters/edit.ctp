<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $parameter->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $parameter->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Parameters'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="parameters form large-10 medium-9 columns">
    <?= $this->Form->create($parameter); ?>
    <fieldset>
        <legend><?= __('Edit Parameter') ?></legend>
        <?php
            echo $this->Form->input('pkey',['label'=>'Key']);
            echo $this->Form->input('pvalue',['label'=>'Value']);
            echo $this->Form->input('pdescription',['label'=>'Description']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
