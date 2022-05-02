<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tags[][] $tags
 */
?>
<div class="card mb-4">
    <div class="card-header">Tags</div>
    <div class="card-body">
        <div class="row">
            <?php foreach ($tags as $tagList) : ?>
                <div class="col-sm-6">
                    <ul class="list-unstyled mb-0">
                        <?php foreach ($tagList as $tag) : ?>
                            <li><a href="#!"><?= h($tag->name) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
