<form method="POST" action="?">
    <h1>Pizza Konfigurator</h1>
    <p>Deine Pizza besteht aus folgenden Toppings:</p>
    <?php    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $zutat = $_POST['zutat'];
        session_start();
        if (isset($_SESSION['zutat'])) {
            $zutat = $_SESSION['zutat'];
            $zutaten = [];
            array_push($zutaten, $zutat);
            echo "<ul>";
            for ($i = 0; $i < count($zutaten); $i++) {
                echo "<li>{$zutaten['i']}</li>";
            }
            echo "</ul>";
        }
    }
    ?>
    <b>Füge weitere Zutaten hinzu:</b>
    <input type="text" name="zutat" placeholder="Zutat" />
    <input type="submit" value="Hinzufügen" />
</form>