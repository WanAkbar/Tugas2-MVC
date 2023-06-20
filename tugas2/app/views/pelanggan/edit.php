<h2>Edit Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/update" method="post">
    <table>
        <input type="hidden" name="pel_id" value="<?php echo $data['pel_id']; ?>">
        <tr>
            <td>ID. PELANGGAN</td>
            <td><input type="text" name="pel_id_gol" value="<?php echo $data['pel_id_gol']; ?>"></td>
        </tr>
        <tr>
            <td>NO. PELANGGAN</td>
            <td><input type="text" name="pel_no" value="<?php echo $data['pel_no']; ?>"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pel_nama" value="<?php echo $data['pel_nama']; ?>"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="pel_alamat" id="" cols="30" rows="10"><?php echo $data['pel_alamat']; ?></textarea></td>
        </tr>
        <tr>
            <td>NO. HP</td>
            <td><input type="text" name="pel_hp" value="<?php echo $data['pel_hp']; ?>"></td>
        </tr>
        <tr>
            <td>KTP</td>
            <td><input type="text" name="pel_ktp" value="<?php echo $data['pel_ktp']; ?>"></td>
        </tr>
        <tr>
            <td>NO. SERI</td>
            <td><input type="text" name="pel_seri" value="<?php echo $data['pel_seri']; ?>"></td>
        </tr>
        <tr>
            <td>NO. METERAN</td>
            <td><input type="text" name="pel_meteran" value="<?php echo $data['pel_meteran']; ?>"></td>
        </tr>
        <tr>
            <td>PEL. AKTIF</td>
            <td>
                <input type="radio" name="pel_aktif"  value="Ya"  <?php echo ($data=='Ya')?'checked':'' ?>>Ya
                <input type="radio" name="pel_aktif"  value="Tidak" <?php echo ($data=='Tidak')?'checked':'' ?>>Tidak
            </td>
        </tr>
        <tr>
            <td>ID USER</td>
            <td><input type="text" name="pel_id_user" value="<?php echo $data['pel_id_user']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>