<?php view("partials/head.php") ?>


<?php view("partials/Header.php") ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <?php foreach ($data as $post): ?>
            <ul>
                <li>
                    <a href="/note?id=<?= $post['id'] ?>" class="hover:text-blue-800 text-blue-500">
                        <?= $post['body'] ?>
                    </a>
                </li>
            </ul>
        <?php endforeach ?>

        <p>

        <div class="mt-5">
            <a href="create" class="text-blue-500 hover:underline hover:text-blue-800">Create Note </a>
        </div>
        </p>
    </div>
</main>
<?php view("partials/body.php") ?>