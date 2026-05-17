<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>
<?php loadPartial('top-banner'); ?>

<!-- Job Listings -->
<section class="bg-gray-50">
    <div class="container mx-auto p-4 mt-4">
        <div class="text-center text-3xl mb-4 font-bold text-gray-800 border border-purple-100 bg-white rounded-xl p-3 shadow-sm">
            <?php if(isset($keywords)) : ?>
                Search Results for: <?= htmlspecialchars($keywords) ?>
            <?php else : ?>
                Creative Opportunities
            <?php endif; ?>
            </div>
        <?php loadPartial('message') ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <?php foreach($listings as $listing) : ?>
            <!-- Job Listing -->
            <div class="rounded-lg shadow-md bg-white border border-gray-100">
                <div class="p-4">
                    <h2 class="text-xl font-semibold">
                        <?= $listing->title ?>
                    </h2>
                    <p class="text-gray-600 text-lg mt-2">
                        <?= $listing->description ?>
                    </p>
                    <ul class="my-4 bg-gray-50 border border-gray-100 p-4 rounded">
                        <li class="mb-2">
                            <strong>Salary:</strong>
                            <?= formatSalary($listing->salary) ?>
                        </li>
                        <li class="mb-2">
                            <strong>Location:</strong>
                            <?= $listing->city ?>, <?= $listing->state ?>
                            <span
                                class="text-xs bg-purple-500 text-white rounded-full px-2 py-1 ml-2"
                            >
                                Local
                            </span>
                        </li>
                        <?php if(!empty($listing->tags)): ?>
                        <li class="mb-2">
                            <strong class="text-purple-600">Tags:</strong>
                            <?= $listing->tags ?>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <a
                        href="/listings/<?= $listing->id ?>"
                        class="block w-full text-center px-5 py-2.5 shadow-sm rounded text-base font-medium text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:opacity-90 transition duration-300"
                    >
                        Details
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php loadPartial('bottom-banner'); ?>
<?php loadPartial('footer'); ?>