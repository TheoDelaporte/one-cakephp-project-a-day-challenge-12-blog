<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Blog $blog
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
                    <h1 class="fw-bolder mb-1"><?= h($blog->title) ?></h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Posted on <?= $blog->created->format('M d, Y') ?></div>
                    <!-- Post categories-->
                    <?php foreach ($blog->tags as $tag) : ?>
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!"><?= h($tag->name) ?></a>
                    <?php endforeach; ?>
                </header>
                <!-- Preview image figure-->
                <!-- Post content-->
                <section class="mb-5">
                    <?= $blog->content ?>
                </section>
            </article>
            <!-- Comments section-->
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <?= $this->Form->create(null, [
                        'url' => ['action' => 'index'],
                        'type' => 'get'
                    ]) ?>
                    <div class="input-group">
                        <input class="form-control" type="text" name="q" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
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
