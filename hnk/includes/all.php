    <?php
        $page = Pagination($RowPerPage);
        $result = All($RowPerPage);
    ?>
    <div class="container mb-5">
        <h1 class="text-center display-5">Összes település</h1>
        <p class="text-center">
            <?php for($i=1; $i<=$page; $i++) { ?>
            <a class="pe-2 <?php 
                    if(!isset($_GET["page"])) { $a=1; } else
                    { $a = $_GET["page"]; }
                    if($a == $i) { echo "link-danger"; }
                ?>" href="./?p=all&page=<?php echo $i; ?>">
                <?php echo $i; ?>
            </a>
            <?php } ?>
        </p>
        <p class="text-center">Oldal: <?php 
            if(!isset($_GET["page"])){ $sv = 1; } else
              { $sv = $_GET["page"]; }
              echo $sv." / ".$page;
        ?></p>
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
        <p class="text-center">
            <?php for($i=1; $i<=$page; $i++) { ?>
            <a class="pe-2" href="./?p=all&page=<?php echo $i; ?>">
                <?php echo $i; ?>
            </a>
            <?php } ?>
        </p>
    </div>