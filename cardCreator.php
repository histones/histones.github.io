<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Cards</title>
</head>
<body>
    <div>
        <form action="insertCards.php" method="POST">
            <label for="_name">Card name:</label>
            <input name="_name" type="text">
            <label for="_description">Description:</label>
            <input name="_description" type="text">
            <label for="_cost">Cost:</label>
            <input name="_cost" type="text">
            <label for="_attack">Attack:</label>
            <input name="_attack" type="text">
            <label for="_health">Health:</label>
            <input name="_health" type="text">
            <label for="_rarity">Rarity:</label>
            <select name="_rarity">
                <option value="0">----Select----</option>
                <option value="1">Common</option>
                <option value="2">Rare</option>
                <option value="3">Epic</option>
                <option value="4">Legendary</option>
            </select>
            <label for="_title">Title:</label>
            <select name="_title">
                <option>----Select----</option>
                <?php
                    $query = "SELECT * FROM title;";
                    $selectedQuery = mysqli_query($con, $query) or die("5: Erro ao preencher select");
                    while($row = mysqli_fetch_assoc($selectedQuery)){ ?>
                        <option value="<?php echo $row['id']; ?>"> <?php echo $row['_name']; ?> </option> <?php
                    } ?>
            </select>
            <label for="_effect">Effect:</label>
            <select name="_effect">
                <option>----Select----</option>
                <?php
                    $query = "SELECT * FROM effect;";
                    $selectedQuery = mysqli_query($con, $query) or die("5: Erro ao preencher select");
                    while($row = mysqli_fetch_assoc($selectedQuery)){ ?>
                        <option value="<?php echo $row['id']; ?>"> <?php echo $row['_name']; ?> </option> <?php
                    } ?>
            </select>
            <label for="_subtype">Subtype:</label>
            <select name="_subtype">
                <option>----Select----</option>
                <?php
                    $query = "SELECT * FROM subtype;";
                    $selectedQuery = mysqli_query($con, $query) or die("5: Erro ao preencher select");
                    while($row = mysqli_fetch_assoc($selectedQuery)){ ?>
                        <option value="<?php echo $row['id']; ?>"> <?php echo $row['_name']; ?> </option> <?php
                    } ?>
            </select>
            <label for="_type">Type:</label>
            <select name="_type">
                <option>----Select----</option>
                <?php
                    $query = "SELECT * FROM typecard;";
                    $selectedQuery = mysqli_query($con, $query) or die("5: Erro ao preencher select");
                    while($row = mysqli_fetch_assoc($selectedQuery)){ ?>
                        <option value="<?php echo $row['id']; ?>"> <?php echo $row['_name']; ?> </option> <?php
                    } ?>
            </select>
            <label for="_expansion">Title:</label>
            <select name="_expansion">
                <option>----Select----</option>
                <?php
                    $query = "SELECT * FROM expansiongame;";
                    $selectedQuery = mysqli_query($con, $query) or die("5: Erro ao preencher select");
                    while($row = mysqli_fetch_assoc($selectedQuery)){ ?>
                        <option value="<?php echo $row['id']; ?>"> <?php echo $row['_name']; ?> </option> <?php
                    } ?>
            </select>
            <label for="_sprite">Sprite:</label>
            <select name="_sprite">
                <option>----Select----</option>
                <?php
                    $query = "SELECT * FROM sprite;";
                    $selectedQuery = mysqli_query($con, $query) or die("5: Erro ao preencher select");
                    while($row = mysqli_fetch_assoc($selectedQuery)){ ?>
                        <option value="<?php echo $row['id']; ?>"> <?php echo $row['_card_sprite']; ?> </option> <?php
                    } ?>
            </select>
            <button type="submit">Salvar</button>
        </form>
    </div>
</body>
</html>