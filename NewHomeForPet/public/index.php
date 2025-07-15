<?php

require_once __DIR__ . '/../models/Database.php'; // Вклучуваме класа за поврзување со базата
require_once __DIR__ . '/../models/Animal.php'; // Вклучуваме класа за работа со животни
require_once __DIR__ . '/../views/home.php'; //za da raboti pocetnata stranica
require_once __DIR__ . '/../views/landing.php'; //ova mi e povikoot za najj pocetnata stranica

// Создаваме објект за база и се поврзуваме
$db = new Database();
$conn = $db->connect();

// Proverka za vrskata ako ne e uspesna ke se pojavi porakata, ako e uspesna nema potreba nisto da se lista
if (!$conn) {
    die("Connection failed!");
}
// Го земаме списокот на сите животни од базата
$animals = Animal::getAll();
?>



<!-- OD TUKA POCNUVA KREIRANJE NA HOME PAGE -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Pet Adoption Home</title>
</head>
<body>
    <h1>Welcome to My Pet Adoption App!</h1>
    
    <?php if (empty($animals)): ?>
        <!-- Ако нема животни -->
        <p>No animals found.</p>
    <?php else: ?>
        <h2>Available Pets:</h2>
        <ul>
            <?php foreach ($animals as $animal): ?>
                <li>
                    <!-- Прикажуваме име и категорија на животното  TUKA KE DODADEME SE STO TREBA DA SE POSTAVI--> 
                    <?= htmlspecialchars($animal['name']) ?> - <?= htmlspecialchars($animal['category']) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>