<?php view('shared.admin.header', [
    'title' => 'Category List'
]); ?>
<?php if (!empty($message['error-delete'])) { ?>
    <div class="alert alert-danger" id="error-delete-category">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="document.getElementById('error-delete-category').style.display='none'">&times;</button>
        <?= $message['error-delete'] ?? '' ?>
    </div>
<?php } ?>
<?php if (!empty($message['success-delete'])) { ?>
    <div class="alert alert-success" id="success-delete-category">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="document.getElementById('success-delete-category').style.display='none'">&times;</button>
        <?= $message['success-delete'] ?? '' ?>
    </div>
<?php } ?>
<form action="./?module=admin&controller=category&action=searchCategoryFull" class="form-inline" method="POST">

    <div class="form-group">
        <input class="form-control search-input" name="categorySearch" placeholder="Tìm kiếm theo tên">
    </div>

    <button type="submit" class="btn btn-root search-btn">
        <i class="fas fa-search"></i>
    </button>
</form>
<hr>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Mã danh mục</th>
            <th>Tên danh mục</th>
            <th>Tổng số sản phẩm</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th class="text-right">Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $cat) : ?>
            <tr>
                <td><?= $cat['id'] ?></td>
                <td><?= $cat['name'] ?></td>
                <td><?= $cat['count'] ?></td>
                <td>
                    <?php if ($cat['status'] == 0) : ?>
                        <span class="badge badge-danger">Không hoạt động</span>
                    <?php else : ?>

                        <span class="badge badge-success">Hoạt động</span>
                    <?php endif; ?>
                </td>
                <td><?= $cat['created_at'] ?></td>
                <td class="text-right">


                    <a href="./?module=admin&controller=category&action=edit&id=<?= $cat['id'] ?>" class="btn btn-sm btn-success">
                        <i class="fas fa-edit"></i>
                    </a>

                    <a href="./?module=admin&controller=category&action=delete&id=<?= $cat['id'] ?>" class="btn btn-sm btn-danger btndelete" onclick="return confirm('Are you sure to delete this category ?')">
                        <i class="fas fa-trash"></i>
                    </a>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php view('shared.admin.footer'); ?>