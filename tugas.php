<form class="form-horizontal" name="f1" methd0=''>
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="masukan nama" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="matkul">mata kuliah</label>
  <div class="col-md-4">
    <select id="matkul" name="matkul" class="form-control">
      <option value="pemograman web">pemograman web</option>
      <option value="pendidikan karakter">pendidikan karakter</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="uts">Nilai UTS</label>  
  <div class="col-md-4">
  <input id="uts" name="uts" type="text" placeholder="masukan nilai" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="uas">Nilai UAS</label>  
  <div class="col-md-4">
  <input id="uas" name="uas" type="text" placeholder="masukan nilai" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="praktik">Nilai praktikum</label>  
  <div class="col-md-4">
  <input id="praktik" name="praktik" type="text" placeholder="masukan nilai" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tombol"></label>
  <div class="col-md-4">
    <button id="tombol" name="tombol" class="btn btn-primary">sumbit</button>
  </div>
</div>

</fieldset>
</form>

<?php
$proses= $_GET['tombol'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['uts'];
$nilai_uas = $_GET['uas'];
$nilai_tugas = $_GET['praktik'];
echo 'Proses : '.$proses;
echo '<br/>Nama : '.$nama_siswa;
echo '<br/>Mata Kuliah : '.$mata_kuliah;
echo '<br/>Nilai UTS : '.$nilai_uts;
echo '<br/>Nilai UAS : '.$nilai_uas;
echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
?>