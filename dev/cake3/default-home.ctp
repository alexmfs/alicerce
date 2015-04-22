<?= $this->element('_head'); ?>
<?= $this->element('_header'); ?>

    <main class="main" role="main">

        <?= $this->Flash->render() ?>

        <?= $this->fetch('content') ?>

    </main>

<?php echo $this->element('_footer'); ?>
