<h2>Pelanggan</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn">Tambah Pelanggan</a>

<table>
      <tr>
            <th>NO</th>
            <th>ID PELANGGAN</th>
            <th>NO. PELANGGAN</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO. HP</th>
            <th>KTP</th>
            <th>NO. SERI</th>
            <th>NO. METERAN</th>
            <th>PEL. AKTIF</th>
            <th>ID USER</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['pel_id']; ?></td>
                  <td><?php echo $row['pel_id_gol']; ?></td>
                  <td><?php echo $row['pel_no']; ?></td>
                  <td><?php echo $row['pel_nama']; ?></td>
                  <td><?php echo $row['pel_alamat']; ?></td>
                  <td><?php echo $row['pel_hp']; ?></td>
                  <td><?php echo $row['pel_ktp']; ?></td>
                  <td><?php echo $row['pel_seri']; ?></td>
                  <td><?php echo $row['pel_meteran']; ?></td>
                  <td><?php echo $row['pel_aktif']; ?></td>
                  <td><?php echo $row['pel_id_user']; ?></td>
                  <td><center><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn">Edit</a></center></td>
                  <td><center><a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>" class="btn">Delete</a></center></td>
            </tr>
      <?php } ?>

</table>