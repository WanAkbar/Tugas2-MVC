<h2>Input Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/simpan" method="post">
    <table>
        <tr>
            <td>ID PELANGGAN</td>
            <td><input type="text" name="pel_id_gol"></td>
        </tr>
        <tr>
            <td>NO. PELANGGAN</td>
            <td><input type="text" name="pel_no"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pel_nama"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="pel_alamat" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>NO. HP</td>
            <td><input type="text" name="pel_hp"></td>
        </tr>
        <tr>
            <td>KTP</td>
            <td><input type="text" name="pel_ktp"></td>
        </tr>
        <tr>
            <td>NO. SERI</td>
            <td><input type="text" name="pel_seri"></td>
        </tr>
        <tr>
            <td>NO. METERAN</td>
            <td><input type="text" name="pel_meteran"></td>
        </tr>
        <tr>
            <td>PEL. AKTIF</td>
            <td>
                <input type="radio" name="pel_aktif" value="Y" required="required">Ya
                <input type="radio" name="pel_aktif" value="N" required="required">Tidak
            </td>
        </tr>
        <tr>
            <td>ID USER</td>
            <td><input type="text" name="pel_id_user" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>