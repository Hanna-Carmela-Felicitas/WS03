<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>
<?php loadPartial('top-banner'); ?>

<section class="bg-gray-50 min-h-[60vh] flex items-center">
    <div class="container mx-auto p-4">
        <div class="max-w-2xl mx-auto bg-white border border-gray-100 shadow-md rounded-xl p-8">
            <div class="text-center text-5xl font-bold text-purple-600 mb-4">
                <?= $status ?>
            </div>
            <p class="text-center text-2xl text-gray-600 mb-6">
                <?= $message ?>
            </p>
            <a
                class="block text-center bg-gradient-to-r from-purple-500 to-pink-500 hover:opacity-90 transition duration-300 text-white px-6 py-3 rounded-lg shadow-sm"
                href="/listings"
            >
                Go Back To Listings
            </a>
        </div>
    </div>
</section>

<?php loadPartial('footer'); ?>