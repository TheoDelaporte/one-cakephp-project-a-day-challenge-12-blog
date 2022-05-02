<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Blog $blog
 * @var \App\Model\Entity\Tag[]|\Cake\Collection\CollectionInterface $tags
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('List Blogs'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="blogs form content">
    <?= $this->Form->create($blog) ?>
    <fieldset>
        <legend><?= __('Add Blog') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('slug');
            echo $this->Form->control('summary');
            echo $this->Form->control('published');
            echo $this->Form->control('content');
            echo $this->Form->control('tags._ids', ['options' => $tags]);
                ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
