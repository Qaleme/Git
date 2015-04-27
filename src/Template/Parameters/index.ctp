<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Parameter'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="parameters index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('pkey','Key') ?></th>
                <th><?= $this->Paginator->sort('pvalue','Value') ?></th>
                <th><?= $this->Paginator->sort('pdescription','Description') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
    <?php foreach ($parameters as $parameter): ?>
            <tr>
                <td><?= h($parameter->pkey) ?></td>
                <td><?= h($parameter->pvalue) ?></td>
                <td><?= h($parameter->pdescription) ?></td>
                <td><?= h($parameter->created) ?></td>
                <td><?= h($parameter->modified) ?></td>
                <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $parameter->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $parameter->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $parameter->id], ['confirm' => __('Are you sure you want to delete " {0} "?', $parameter->pkey)]) ?>
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
