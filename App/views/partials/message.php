<?php
use Framework\Session;
?>

<?php $successMessage = Session::getFlashMessage('success_message'); ?>

<?php if($successMessage !== null) : ?>
    <div class="bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-xl px-4 py-3 my-3 shadow-sm">
        <?= $successMessage ?>
    </div>
<?php endif; ?>

<?php $errorMessage = Session::getFlashMessage('error_message'); ?>

<?php if($errorMessage !== null) : ?>
    <div class="bg-red-50 border border-red-200 text-red-600 rounded-xl px-4 py-3 my-3 shadow-sm">
        <?= $errorMessage ?>
    </div>
<?php endif; ?>