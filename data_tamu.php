<?php       
    include 'connect/koneksi.php';
    $sql = "SELECT * FROM tbl_010";
    $hasil = mysqli_query ($koneksi, $sql);
    while($row = mysqli_fetch_assoc($hasil)){
    ?>
        <tr>
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["nama"];?></td>
            <td><?php echo $row["hp"];?></td>
            <td><?php echo $row["alamat"];?></td>
            <td>
                <a href="edit_tamu.php?id=<?= $row["id"]?>"><button type="button" class="btn btn-primary">Edit</button></a>
                <a href="hapus_tamu.php?id=<?= $row["id"]?>"><button type="button" class="btn btn-danger">Hapus</button></a>
            </td>
        </tr>
    <?php
    }  
    ?>