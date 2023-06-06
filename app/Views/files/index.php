<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <div class="container">
        <h2 class="text-center m-5">Generated files</h2>
        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3 text-right">
                <a href="/files/new"><button class="btn btn-secondary">Create new file</button></a>
            </div>
        </div>
        <? foreach($files as $file): ?>
        <div class="row">
            <div class="file-id">
                <?= $file->id ?>
            </div>
            <div class="file-name">
                <?= $file->name ?>
            </div>
            <div class="file-created">
                <?= $file->created_at ?>
            </div>
            <div class="file-buttom">
                <i data-feather="edit2"></i>
            </div>
            <div class="file-buttom">
                <i data-feather="trash"></i>
            </div>
            <div class="file-buttom">
                <i data-feather="download"></i>
            </div>
        </div>
        <? endforeach; ?>
    </div>
<?= $this->endSection() ?>