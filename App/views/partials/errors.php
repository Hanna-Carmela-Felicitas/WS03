<?php if(isset($errors)) : ?>
    <?php foreach($errors as $error) : ?>
        <div class="bg-red-50 border border-red-200 text-red-600 rounded-xl px-4 py-3 my-3 shadow-sm">
            <?= $error ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>