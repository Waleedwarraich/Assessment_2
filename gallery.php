<!DOCTYPE html>
<html lang="en">

<?php include "includes/header.inc"?>
<main>
    <h1 id="petsHeading">Discover Pets Victoria</h1>
    <p id="petsPara">Pets victoria is a dedicated pet adoption organization based in victoria, australia, focused on providing a safe and loving environment for pets in need. with a compassionate approach, pets victoria works tirelessly to rescue, rehabilitate, and rehome dogs, cats, and other animals. their mission is to connect these deserving pets with caring individuals and families, creating lifelong bonds. the organization offers a range of services, including adoption counseling, pet education, and community support programs, all aimed at promoting responsible pet ownership and reducing the number of homeless animals.</p>

    <ul class="image-list">

        <?php
       $sql = "SELECT * FROM pets";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<li>';
                echo '<div class="image-container">';
                echo '<img src="' . $row["image"] . '" alt="' . $row["petname"] . '">';
                echo '<h2>' . $row["petname"] . '</h2>';
                echo '<div class="overlay-text">';
                echo '<a href="details.php?petid=' . $row["petid"] . '">Explore more</a>';
                echo '</div>';
                echo '</div>';
                echo '</li>';
            }
        } else {
            echo "<li>No images found.</li>";
        }
        ?>
    </ul>
</main>