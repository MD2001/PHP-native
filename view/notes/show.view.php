<?php view("partials/head.php") ?>


<?php view("partials/Header.php") ?>

<a class="mx-auto py-6 sm:px-32 ml-7 text-blue-500 hover:text-blue-900 hover:underline " href="/notes"> Go back</a>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <p>
            <?= $data['body'] ?>
        </p>

    </div>
</main>
<form action="/note" method="POST">
    <input type="hidden" name="__method" value="DELETE">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <button class="mx-auto py-6 sm:px-32 ml-7 text-red-300 hover:text-red-600 hover:underline" type="submit">Delete</button>
</form>
<?php view("partials/body.php") ?>