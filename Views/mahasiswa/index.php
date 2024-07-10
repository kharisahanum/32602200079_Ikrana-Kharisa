<h1>Mahasiswas</h1>
<ul>
    <?php foreach ($mahasiswa as $m) :?>
        <li><?= $m['nama']?> (<?= $m['nim']?>, <?= $m['jurusan']?>, <?= $m['angkatan']?>)</li>
    <?php endforeach;?>
</ul>
<a href="<?php echo site_url('mahasiswa/create');?>">Create new mahasiswa</a>