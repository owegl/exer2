<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>&lt;ph echo SITE_NAME; ?&gt;</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>PHP Profile App</h1>
        </header>
<main>
    <form action="index.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required="">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required="">

        <button type="submit">Submit</button>
    </form>

    <p><a href="profile.php">Go to Profile</a></p>
</main>

<footer>
    <p>© 2025PHP Profile App</p>
</footer>

</body></html>