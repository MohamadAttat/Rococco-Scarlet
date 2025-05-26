<?php
require_once(__DIR__ . '/../classes/Database.php');

class HPService
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getSlides(): array
    {
        // Fetch slides that are published (published = 1)
        $stmt = $this->db->prepare("SELECT * 
                                    FROM tbl_slider_images 
                                    WHERE published = 1 
                                    ORDER BY sort_order desc limit 1");
        $stmt->execute();
        $slides = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $slides;
    }
}
?>

