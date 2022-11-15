    <?php
        $result = Adatlap();
        $row = mysqli_fetch_array($result);
    ?>
    <div class="container mb-5">
        <h1 class="text-center display-5"> 
           <?php echo $row["helyseg"]; ?>
        </h1>
        <p class="fs-3">Jogállás: <?php echo $row["jogallas"]; ?></p>
        <p class="fs-3">Megye: <?php echo $row["megye"]." vármegye"; ?></p>
        <p class="fs-3">Járás: <?php echo $row["jaras"]; ?></p>
        <p class="fs-3">Területe: <?php echo $row["terulet"]; ?> km<sup>2</sup></p>
        <p class="fs-3">Népesség: <?php echo $row["nepesseg"]; ?> fő</p>
        <p class="fs-3">Lakásszám: <?php echo $row["lakas"]; ?> darab</p>
    </div>