<h2>User</h2>

<a href="<?php echo URL; ?>/user/input" class="btn">Tambah User</a>

<table>
      <tr>
            <th>NO</th>
            <th>EMAIL PENGGUNA</th>
            <th>PASSWORD</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO. HP</th>
            <th>POS</th>
            <th>ROLE</th>
            <th>USER AKTIF</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['user_id']; ?></td>
                  <td><?php echo $row['user_email']; ?></td>
                  <td><?php echo $row['user_password']; ?></td>
                  <td><?php echo $row['user_nama']; ?></td>
                  <td><?php echo $row['user_alamat']; ?></td>
                  <td><?php echo $row['user_hp']; ?></td>
                  <td><?php echo $row['user_pos']; ?></td>
                  <td><?php echo $row['user_role']; ?></td>
                  <td><?php echo $row['user_aktif']; ?></td>
                  <td><center><a href="<?php echo URL; ?>/user/edit/<?php echo $row['user_id']; ?>" class="btn">Edit</a></center></td>
                  <td><center><a href="<?php echo URL; ?>/user/delete/<?php echo $row['user_id']; ?>" class="btn">Delete</a></center></td>
            </tr>
      <?php } ?>

</table>