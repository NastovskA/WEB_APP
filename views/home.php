<!-- Почетна страна -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Home for Pets</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

    <!-- Мени -->
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Add Pet</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
        </ul>
    </nav>

    <!-- Херој секција -->
    <section class="hero">
        <h1>🐾 Give a Pet a New Home</h1>
        <p>Find your new best friend today</p>
        <a href="#" class="btn">Browse Animals</a>
    </section>

    <!-- Категории -->
    <section class="categories">
        <h2>Choose a Category</h2>
        <button>Dogs</button>
        <button>Cats</button>
        <button>Birds</button>
        <button>Others</button>
    </section>

    <!-- Достапни животни -->
    <section class="animal-list">
        <h2>Animals Waiting for You</h2>
        <ul>
            <?php foreach ($animals as $animal): ?>
                <li>
                    <strong><?= htmlspecialchars($animal['name']) ?></strong> - 
                    <?= htmlspecialchars($animal['category']) ?>, 
                    <?= htmlspecialchars($animal['age']) ?> years old
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- Фуснота -->
    <footer>
        <p>© <?= date("Y") ?> New Home for Pets</p>
    </footer>

</body>
</html>
