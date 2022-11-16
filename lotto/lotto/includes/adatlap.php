    <?php
        $result = Adatlap();
        $evszam = $_GET['evszam'];
        $het = $_GET['het'];
    ?>
    <div class="container py-3">
        <h1 class="text-center display-5"><?php echo $evszam;?>. - <?php echo $het;?>. hét</h1>
        <div class="row">
            <div class="col-6">
                <p class="fs-4">Az ötös lottó nyerőszámai:</p>
                <?php
                    $row = mysqli_fetch_array($result) ;
                    
                        echo "<p class='fs-4'>$row[szam1], $row[szam2], $row[szam3], $row[szam4], $row[szam5]</p>";
                    
                ?>
                
            </div>
            <div class="col-6">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col"></th>
                        <th scope="col">DARAB</th>
                        <th scope="col">HUF</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td scope="row">Öt találatos</th>
                        <td><?php echo $row['talalat5_db']?></td>
                        <td><?php echo $row['talalat5_huf'] . ' Ft'?></td>
                      
                        </tr>
                        <tr>
                        <td scope="row">Négy találatos</td>
                        <td><?php echo $row['talalat4_db']?></td>
                        <td><?php echo $row['talalat4_huf'] . ' Ft'?></td>
                      
                        </tr>
                        <tr>
                        <td scope="row">Három találatos</td>
                        <td><?php echo $row['talalat3_db']?></td>
                        <td><?php echo $row['talalat4_huf'] . ' Ft'?></td>
                        
                        </tr>
                        <tr>
                        <td scope="row">Két találatos</td>
                        <td><?php echo $row['talalat2_db']?></td>
                        <td><?php echo $row['talalat2_huf'] . ' Ft'?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <p class="fs-1">
            
        </p>
    </div>
    