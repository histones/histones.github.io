<?php
    include 'connection.php';

    $name = $_POST['_name'];
    $description = $_POST['_description'];
    $cost = $_POST['_cost'];
    $attack = $_POST['_attack'];
    $health = $_POST['_health'];
    $rarity = $_POST['_rarity'];
    $title = $_POST['_title'];
    $effect = $_POST['_effect'];
    $subtype = $_POST['_subtype'];
    $type = $_POST['_type'];
    $expansion = $_POST['_expansion'];
    $sprite = $_POST['_sprite'];

    $insertQuery = "INSERT INTO 
    card (_name, _description, _cost, _attack, _health, _rarity, id_effect, id_expansiongame, id_subtype, id_typecard, id_title, id_sprite, is_active)
    VALUES ('$name', '$description', '$cost', '$attack', '$health', '$rarity', '$effect', '$expansion', '$subtype', '$type', '$title', '$sprite', 1);";
    
    $insert = mysqli_query($con, $insertQuery) or die("2: Insert query failed");

    if($insert > 0){
        echo "Sucessfully insert!";
    }else{
        echo "4: Failed insert";
    }