<?= $this->element('_head'); ?>
<?= $this->element('_header'); ?>

    <main class="main" role="main">

        <div class="wrap">

            <h1 class="title-page"><?= $this->fetch('title') ?></h1>

        </div>

        <div class="breadcrumb-container">
            <?php echo $this->element('breadcrumb'); ?>
        </div>

        <?= $this->Flash->render() ?>

        <?= $this->fetch('content') ?>

    </main>

<?php echo $this->element('newsletter'); ?>
<?php echo $this->element('_footer'); ?>
