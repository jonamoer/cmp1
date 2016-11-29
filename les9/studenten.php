<?php
$current = "studenten.php";
require_once("includes/header.php");
require_once("includes/nav.php");

function getAllStudents(){
    //DB CONNECTIE MAKEN
    require("connectie.php");
    try{
        $stmt = $db->prepare("SELECT * FROM students");
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;

    }catch(PDOExeption $e){
        $message = $e;
    }
}

?>
    <div class="container">
        <h1>Hello, Bootstrappers!</h1>
        <p>Studenten</p>

        <table>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Familienaam</th>
                <th>Email</th>
            </tr>

            <?php
            $result =  getAllStudents();
            foreach($result as $row){
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['naam']}</td>";
                echo "<td>{$row['familienaam']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "</tr>";
            }

            ?>
        </table>


        <?php
        if(!empty($message)){
            echo "<p class='bg-success' >{$message}</p>";
        }
        ?>
    </div>

<?php require_once("includes/footer.php"); ?>