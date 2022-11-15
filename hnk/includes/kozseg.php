    <?php
        $result = Kozseg();
    ?>
    <div class="container mb-5">
        <h1 class="text-center display-5">Kozsegek</h1>
        <table class="table">
            <tr>
                <th>#</th>
                <th>Helység</th>
                <th>Jogállás</th>
                <th>Megye</th>
                <th>Járás</th>
            </tr>
            <?php while($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $row["ID"]; ?></td>
                <td>
                    <a href="./?p=adatlap&id=<?php echo $row["ID"]; ?>">
                    <?php echo $row["helyseg"]; ?>
                    </a>
                </td>
                <td><?php echo $row["jogallas"]; ?></td>
                <td><?php echo $row["megye"]; ?></td>
                <td><?php echo $row["jaras"]; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>