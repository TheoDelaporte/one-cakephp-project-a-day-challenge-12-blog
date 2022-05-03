<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Blog[]|\Cake\Collection\CollectionInterface $blogs
 */
?>
<?php
$this->Html->css(['styles.css'], ['block' => true,])
?>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#!">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1"><?= __('The Awesome Blog') ?></h1>
                </header>
            </article>
            <?php foreach ($blogs as $blog) : ?>
                <div class="card mb-2">
                    <div class="card-body">
                        <?php foreach ($blog->tags as $tag) : ?>
                            <?= $this->Html->link(
                                $tag->name,
                                [
                                    'action' => 'index',
                                    'tag_slug' => $tag->slug,
                                ],
                                [
                                    'class' => 'badge bg-secondary text-decoration-none link-light',
                                ]
                            ) ?>
                        <?php endforeach; ?>
                        <h4 class="card-title mt-2"><?= h($blog->title) ?></h4>
                        <p class="card-text"><?= h($blog->summary) ?></p>
                        <p class="card-text"><small class="text-muted">Posted on <?= $blog->created->format('M d, Y') ?></small></p>
                        <?= $this->Html->link(
                            __('Read more →'),
                            ['action' => 'view', $blog->slug],
                            ['class' => 'btn btn-secondary']
                        ) ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <?= $this->element('search') ?>
            <!-- Tags widget-->
            <?= $this->cell('TagsWidget::display') ?>
        </div>
    </div>
</div>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white"><?= __('One Project a Day with CakePHP') ?></p>
    </div>
</footer>
