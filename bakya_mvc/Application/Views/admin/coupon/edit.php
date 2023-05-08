<?php view('shared.admin.header', [
    'title' => 'Edit Coupon'
]); ?>
<?php if (!empty($message['success-edit'])) { ?>
    <div class="alert alert-success" id="success-edit-coupon">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="document.getElementById('success-edit-coupon').style.display='none'">&times;</button>
        <?= $message['success-edit'] ?? '' ?>
    </div>
<?php } ?>

<div class="container">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin: 0 auto">
            <form action="./?module=admin&controller=coupon&action=update&id=<?= $_GET['id'] ?>" method="POST" role="form" name="couponForm" onsubmit="return validateCouponForm();">

                <div class="form-group">
                    <label for="coupon-id">Mã giảm giá</label>
                    <small id="coupon-id-err"></small>
                    <input type="text" class="form-control" name="id" placeholder="Nhập mã giảm giá" value="<?= $coupon['id'] ?>" id="coupon-id" onkeyup="validateNotEmpty(this, 'Coupon name'); this.value = this.value.toUpperCase();">
                    <?php if (!empty($message['error-name'])) : ?>
                        <small class="help-block invalid-error"><?= $message['error-name'] ?></small>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="coupon-value">Giảm (%)</label>
                    <small id="coupon-value-err"></small>
                    <input type="number" class="form-control" step="0.1" name="coupon_value" value="<?= $coupon['coupon_value'] * 100 ?>" placeholder="Nhập số phần trăm giảm giá" id="coupon-value" onkeyup="validateFloat(this, 'Discount', 1);">
                </div>

                <div class="form-group">
                    <label for="coupon-use">Nhập số lượng mã giảm giá</label>
                    <small id="coupon-use-err"></small>
                    <input type="number" class="form-control" step="1" name="used_times" value="<?= $coupon['used_times'] ?>" placeholder="Nhập số lượng mã" id="coupon-use" onkeyup="validateInt(this, 'Available use');">
                </div>

                <div class="form-group">
                    <label for="status">Trậng thái</label>

                    <select name="status" class="form-control" id="status">
                        <option value="1" <?= $coupon['status'] == '1' ? 'selected' : '' ?>>Hoạt động</option>
                        <option value="0" <?= $coupon['status'] == '0' ? 'selected' : '' ?>>Không hoạt động</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Lưu</button>
            </form>
        </div>

    </div>

</div>




<?php view('shared.admin.footer'); ?>