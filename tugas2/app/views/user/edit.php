<h2>Edit User</h2>

<form action="<?php echo URL; ?>/user/update" method="post">
    <table>
        <input type="hidden" name="user_id" value="<?php echo $data['user_id']; ?>">
        <tr>
            <td>EMAIL PENGGUNA</td>
            <td><input type="text" name="user_email" value="<?php echo $data['user_email']; ?>"></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="text" name="user_password" value="<?php echo $data['user_password']; ?>"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="user_nama" value="<?php echo $data['user_nama']; ?>"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="user_alamat" id="" cols="30" rows="10"><?php echo $data['user_alamat']; ?></textarea></td>
        </tr>
        <tr>
            <td>NO. HP</td>
            <td><input type="text" name="user_hp" value="<?php echo $data['user_hp']; ?>"></td>
        </tr>
        <tr>
            <td>POS</td>
            <td><input type="text" name="user_pos" value="<?php echo $data['user_pos']; ?>"></td>
        </tr>
        <tr>
            <td>ROLE</td>
            <td><input type="text" name="user_role" value="<?php echo $data['user_role']; ?>"></td>
        </tr>
        <tr>
            <td>USER AKTIF</td>
            <td><input type="text" name="user_aktif" value="<?php echo $data['user_aktif']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>