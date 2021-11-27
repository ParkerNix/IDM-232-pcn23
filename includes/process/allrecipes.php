<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="list">
        <a href="details.php?id=' . $row['id'] . '">
        <div class="recipe1">
            <img src="../../images/macandcheeseround.png" alt="categories"></a>
        </div>
        <div class="recipe2">
            <h2>' . $row['title'] . '</h2></a>
        </div>
        <div class="recipe3">
            <p>' . $row['description'] . '</p>
        </div></a>
        </div>';
}?>