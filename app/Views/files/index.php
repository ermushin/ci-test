<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <div class="container">
        <h2 class="text-center m-5">Generated files</h2>
        <div class="row mb-5">
            <div class="col-md-9"></div>
            <div class="col-md-3 text-right">
                <a href="/files/new"><button class="btn btn-secondary">Create new file</button></a>
            </div>
        </div>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Created date</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            <th scope="col">Download</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($files as $file): ?>
            <tr>
                <td class="file-id col-md-1">
                    <?= $file['id'] ?>
                </td>
                <td class="file-name col-md-4">
                    <?= $file['name'] ?>
                </td>
                <td class="file-created col-md-4">
                    <?= $file['contract_date'] ?>
                </td>
                <td class="file-buttom col-md-1 text-center">
                    <a href="/files/<?=$file['id']?>/edit"><i data-feather="edit-2"></i></a>
                </td>
                <td class="file-buttom col-md-1 text-center">
                    <a href="/files/<?=$file['id']?>/delete"><i data-feather="trash"></i></a>
                </td>
                <td class="file-buttom col-md-1 text-center">
                <a href="/files/<?=$file['id']?>"><i data-feather="download"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
    </div>
<?= $this->endSection() ?>