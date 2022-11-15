    <?php
        $result = ABC();
    ?>
    <div class="container mb-5">
        <h1 class="text-center display-5">Összes település - ABC</h1>
        <p class="text-center">
            <a class="pe-2" href="./?p=abc&betu=a">A</a>
            <a class="pe-2" href="./?p=abc&betu=b">B</a>
            <a class="pe-2" href="./?p=abc&betu=c">C</a>
            <a class="pe-2" href="./?p=abc&betu=d">D</a>
            <a class="pe-2" href="./?p=abc&betu=e">E</a>
            <a class="pe-2" href="./?p=abc&betu=f">F</a>
            <a class="pe-2" href="./?p=abc&betu=g">G</a>
            <a class="pe-2" href="./?p=abc&betu=h">H</a>
            <a class="pe-2" href="./?p=abc&betu=i">I</a>
            <a class="pe-2" href="./?p=abc&betu=j">J</a>
            <a class="pe-2" href="./?p=abc&betu=k">K</a>
            <a class="pe-2" href="./?p=abc&betu=l">L</a>
            <a class="pe-2" href="./?p=abc&betu=m">M</a>
            <a class="pe-2" href="./?p=abc&betu=n">N</a>
            <a class="pe-2" href="./?p=abc&betu=o">O</a>
            <a class="pe-2" href="./?p=abc&betu=p">P</a>
            <a class="pe-2" href="./?p=abc&betu=r">R</a>
            <a class="pe-2" href="./?p=abc&betu=s">S</a>
            <a class="pe-2" href="./?p=abc&betu=t">T</a>
            <a class="pe-2" href="./?p=abc&betu=u">U</a>
            <a class="pe-2" href="./?p=abc&betu=v">V</a>
            <a class="pe-2" href="./?p=abc&betu=z">Z</a>
        </p>
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