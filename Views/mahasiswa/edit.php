<h1>Edit mahasiswa</h1>
<form action="<?php echo site_url('mahasiswa/update/'. $mahasiswa['id']);?>" method="post">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" value="<?= esc($mahasiswa['nama']) ?>" required><br><br>
    <label for="nim">NIM:</label>
    <input type="text" name="nim" value="<?= esc($mahasiswa['nim']) ?>" required><br><br>
    <label for="jurusan">Jurusan:</label>
    <input type="text" name="jurusan" value="<?= esc($mahasiswa['jurusan']) ?>" required><br><br>
    <label for="angkatan">Angkatan:</label>
    <input type="text" name="angkatan" value="<?= esc($mahasiswa['angkatan']) ?>" required><br><br>
    <input type="submit" value="Update">
</form>
