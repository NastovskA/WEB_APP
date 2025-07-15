<!-- Класа за миленик -->

<?php
require_once __DIR__ . '/Database.php';

class Animal {
    public static function getAll() {
        $db = new Database();
        $conn = $db->connect();

        if (!$conn) return [];

        $stmt = $conn->prepare("SELECT * FROM animals ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
