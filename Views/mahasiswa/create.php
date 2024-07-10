<h1>Create new mahasiswa</h1>
<form action="<?php echo site_url('mahasiswa/store');?>" method="post">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required><br><br>
    <label for="nim">NIM:</label>
    <input type="text" name="nim" required><br><br>
    <label for="jurusan">Jurusan:</label>
    <input type="text" name="jurusan" required><br><br>
    <label for="angkatan">Angkatan:</label>
    <input type="text" name="angkatan" required><br><br>
    <input type="submit" value="Create">
</form>
