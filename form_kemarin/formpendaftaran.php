<html>
    <head>
	    <title>Pendaftaran Peserta Didik Baru</title>
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	    
        <style>
		    .warning {color: #FF0000;}
	    </style>
    </head>
    <body>
        <?php 
            $error_jenis_pendaftaran = "";
            $error_tgl_msk = "";
            $error_nis = "";
            $error_no_ujian = "";
            $error_paud = "";
            $error_tk = "";
            $error_skhun = "";
            $error_ijazah = "";
            $error_hobi = "";
            $error_cita2 = "";
            $error_nama = "";
            $error_jenis_kelamin = "";
            $error_nisn_sekarang = "";
            $error_nik = "";
            $error_tempat_lahir = "";
            $error_tanggal_lahir = "";
            $error_agama = "";
            $error_berkebutuhan = "";
            $error_alamat = "";
            $error_rt = "";
            $error_rw = "";
            $error_dusun = "";
            $error_kelurahan = "";
            $error_kecamatan = "";
            $error_kode_pos = "";
            $error_tempat_tinggal = "";
            $error_transportasi = "";
            $error_no_hp = "";
            $error_no_telepon="";
            $error_email = "";
            $error_kps = "";
            $error_no_kps = "";
            $error_kewarganegaraan = "";
            $error_negara = "";

            $jenis_pendaftaran = "";
            $tgl_msk = "";
            $nis = "";
            $no_ujian = "";
            $paud = "";
            $tk = "";
            $skhun = "";
            $ijazah = "";
            $hobi = "";
            $cita2 = "";
            $nama = "";
            $jenis_kelamin = "";
            $nisn_sekarang = "";
            $nik = "";
            $tempat_lahir = "";
            $tanggal_lahir = "";
            $agama = "";
            $berkebutuhan = "";
            $alamat = "";
            $rt = "";
            $rw = "";
            $dusun = "";
            $kelurahan = "";
            $kecamatan = "";
            $kode_pos = "";
            $tempat_tinggal = "";
            $transportasi = "";
            $no_hp = "";
            $no_telepon="";
            $email = "";
            $kps = "";
            $no_kps = "";
            $kewarganegaraan = "";
            $negara = "";

            $count = 0;
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
	            //bagian jenis pendaftaran
	            if (empty($_POST["jenis_pendaftaran"])) {
		            $error_jenis_pendaftaran = "Jenis pendaftaran tidak boleh kosong";
	            }
	            else{
		            if (strlen($_POST['jenis_pendaftaran']) != 2) {
			            $error_jenis_pendaftaran = "Masukkan jumlah angka yang sesuai";
		            }
		            if(!is_numeric($_POST['jenis_pendaftaran'])){
			            $error_jenis_pendaftaran = "Inputan harus angka";
		            }
		            else{
			            $count++;
			            $jenis_pendaftaran = cek_input($_POST["jenis_pendaftaran"]);
		            }
	            }

	            //bagian nis
	            if (empty($_POST["nis"])) {
		            $error_nis = "NIS tidak boleh kosong";
	            }
	            else{
		            if(!is_numeric($_POST['nis'])){
			            $error_nis = "Inputan harus angka";
		            }
		            else{
			            $count++;
			            $nis = cek_input($_POST["nis"]);
		            }
	            }

	            //Bagian nomor peserta ujian
	            if (empty($_POST["no_ujian"])) {
		            $error_no_ujian = "Nomor peserta ujian tidak boleh kosong";
	            }
	            else{
		            if(!is_numeric($_POST['no_ujian'])){
			            $error_no_ujian = "Inputan harus angka";
		            }
		            else{
			            $count++;
			            $no_ujian = cek_input($_POST["no_ujian"]);
		            }
	            }

	            //Bagian SKHUN 
	            if (empty($_POST["skhun"])) {
		            $error_skhun = "No. Seri SKHUN tidak boleh kosong";
	            }
	            else{
		            if(!is_numeric($_POST['skhun'])){
			            $error_skhun = "Inputan harus angka";
		            }
		            else{
			            $count++;
			            $skhun = cek_input($_POST["skhun"]);
		            }
	            }

	            //Bagian Ijazah
	            if (empty($_POST["ijazah"])) {
		            $error_ijazah = "No. Seri Ijazah tidak boleh kosong";
	            }
	            else{
		            if(!is_numeric($_POST['ijazah'])){
			            $error_ijazah = "Inputan harus angka";
		            }
		            else{
			            $count++;
			            $ijazah = cek_input($_POST["ijazah"]);
		            }
	            }

	            //Bagian Hobi
	            if (empty($_POST["hobi"])) {
		            $error_hobi = "Hobi tidak boleh kosong";
	            }
	            else{
		            $hobi = cek_input($_POST["hobi"]);
		            
                    if (!preg_match("/^[a-zA-Z]*$/", $hobi)) {
			            $error_hobi = "Inputan hanya boleh huruf";
	        	    }
		            else if (strlen($hobi) != 1) {
			            $error_hobi = "Inputan hanya boleh 1 huruf";
		            }
		            else{
			            $count++;
		            }
	            }

	            //Bagian Cita-cita
	            if (empty($_POST["cita2"])) {
		            $error_cita2 = "Cita-cita tidak boleh kosong";
	            }
	            else{
		            $cita2 = cek_input($_POST["cita2"]);
		            
                    if (!preg_match("/^[a-zA-Z]*$/", $cita2)) {
			            $error_cita2 = "Inputan hanya boleh huruf";
		            }
		            else if (strlen($cita2) != 1) {
			            $error_cita2 = "Inputan hanya boleh 1 huruf";
		            }
		            else{
			            $count++;
		            }
	            }

	            //Bagian Nama lengkap
	            if (empty($_POST["nama"])) {
		            $error_nama = "Nama tidak boleh kosong";
	            }
	            else{
		            $nama = cek_input($_POST["nama"]);
		            
                    if (preg_match("/^[a-zA-Z]*$/", $nama)) {
			            $error_nama = "Inputan hanya boleh huruf dan spasi";
		            }
		            else{
			            $count++;
		            }
	            }

	            //Bagian NISN
	            if (empty($_POST["nisn_sekarang"])) {
		            $error_nisn_sekarang = "NISN tidak boleh kosong";
	            }
	            else{
		            if(!is_numeric($_POST['nisn_sekarang'])){
			            $error_nisn_sekarang = "Inputan harus angka";
		            }
		            else{
			            $count++;
			            $nisn_sekarang = cek_input($_POST["nisn_sekarang"]);
		            }
	            }

	            //Bagian NIK
	            if (empty($_POST["nik"])) {
		            $error_nik = "NIK tidak boleh kosong";
	            }
	            else{
		            if(!is_numeric($_POST['nik'])){
			            $error_nik = "Inputan harus angka";
		            }
		            else{
			            $count++;
			            $nik = cek_input($_POST["nik"]);
		            }
	            }

	            //Bagian tempat lahir
	            if (empty($_POST["tempat_lahir"])) {
		            $error_tempat_lahir = "Tempat lahir tidak boleh kosong";
	            }
	            else{
		            $tempat_lahir = cek_input($_POST["tempat_lahir"]);
		            
                    if (!preg_match("/^[a-zA-Z]*$/", $tempat_lahir)) {
			            $error_tempat_lahir = "Inputan hanya boleh huruf dan spasi";
		            }
		            else{
		            	$count++;
		            }
	            }

	            //Bagian Agama
	            if (empty($_POST["agama"])) {
		            $error_agama = "Agama tidak boleh kosong";
	            }
	            else{
		            if (strlen($_POST['agama']) != 2) {
			            $error_agama = "Masukkan jumlah angka yang sesuai";
		            }   
		            else if(!is_numeric($_POST['agama'])){
			            $error_agama = "Inputan harus angka 2 digit";
		            }
		            else{
			            $count++;
			            $agama = cek_input($_POST["agama"]);
		            }
	            }

	            //Bagian berkebutuhan khusus
	            if (empty($_POST["berkebutuhan"])) {
		            $error_berkebutuhan = "Berkebutuhan khusus tidak boleh kosong";
	            }
	            else{
		            if (strlen($_POST['berkebutuhan']) != 2) {
			            $error_berkebutuhan = "Masukkan jumlah angka yang sesuai";
		            }
		            else if(!is_numeric($_POST['berkebutuhan'])){
			            $error_berkebutuhan = "Inputan harus angka 2 digit";
		            }
		            else{
			            $count++;
			            $berkebutuhan = cek_input($_POST["berkebutuhan"]);
		            }
	            }

	            //Bagian Alamat jalan
	            if (empty($_POST["alamat"])) {
		            $error_alamat = "Alamat tidak boleh kosong";
	            }
	            else{
		            $alamat = cek_input($_POST["alamat"]);
		            
                    if (!preg_match("/^[a-zA-Z0-9]*$/", $alamat)) {
			            $alamat = "Inputan hanya boleh huruf,spasi dan angka";
		            }
		            else{
			            $count++;
		            }
	            }

	            //Bagian RT
	            if (empty($_POST["rt"])) {
		            $error_rt = "RT tidak boleh kosong";
	            }
	            else{
		            $rt = cek_input($_POST["rt"]);
		            
                    if (!preg_match("/^[0-9]*$/", $rt)) {
			            $error_rt = "Inputan hanya boleh angka";
		            }
		            else{
			            $count++;
		            }
	            }

	            //Bagiuan RW
	            if (empty($_POST["rw"])) {
		            $error_rw = "RW tidak boleh kosong";
	            }
	            else{
		            $rw = cek_input($_POST["rw"]);
		            
                    if (!preg_match("/^[0-9]*$/", $rw)) {
			            $error_rw = "Inputan hanya boleh angka";
		            }
		            else{
			            $count++;
		            }
	            }

	            //Bagian nama dusun
	            if (empty($_POST["dusun"])) {
		            $error_dusun = "Nama dusun tidak boleh kosong";
	            }
	            else{
		            $dusun = cek_input($_POST["dusun"]);
		            
                    if (!preg_match("/^[a-zA-Z0-9]*$/", $dusun)) {
			            $dusun = "Inputan hanya boleh huruf,spasi, dan angka";
		            }
		            else{
			            $count++;
		            }
	            }

	            //Bagian Kelurahan/Desa
	            if (empty($_POST["kelurahan"])) {
		            $error_kelurahan = "Kelurahan/Desa tidak boleh kosong";
	            }
	            else{
		            $kelurahan = cek_input($_POST["kelurahan"]);
		            
                    if (!preg_match("/^[a-zA-Z0-9]*$/", $kelurahan)) {
			            $kelurahan = "Inputan hanya boleh huruf,spasi, dan angka";
		            }
		            else{
			            $count++;
		            }
	            }

	            //Bagian Kecamatan
	            if (empty($_POST["kecamatan"])) {
		            $error_kecamatan = "Kecamatan tidak boleh kosong";
	            }
	            else{
		            $kecamatan = cek_input($_POST["kecamatan"]);
		            
                    if (!preg_match("/^[a-zA-Z0-9]*$/", $kecamatan)) {
			            $kecamatan = "Inputan hanya boleh huruf,spasi dan angka";
		            }
		            else{
			            $count++;
		            }
	            }

	            //Bagian Kode pos
	            if (empty($_POST["kode_pos"])) {
		            $error_kode_pos = "Kode pos tidak boleh kosong";
	            }
	            else{
		            $kode_pos = cek_input($_POST["kode_pos"]);
		            
                    if (!preg_match("/^[0-9]*$/", $kode_pos)) {
			            $kode_pos = "Inputan hanya boleh angka";
	            	}
		            else{
			            $count++;
		            }
	            }

	            //Bagian tempat tinggal
	            if (empty($_POST["tempat_tinggal"])) {
		            $error_tempat_tinggal = "Tempat tinggal tidak boleh kosong";
	            }
	            else{
		            if (strlen($_POST['tempat_tinggal']) != 2) {
			            $error_tempat_tinggal = "Masukkan jumlah angka yang sesuai";
		            }
		            else if(!is_numeric($_POST['tempat_tinggal'])){
			            $error_tempat_tinggal = "Inputan harus angka 2 digit";
		            }
		            else{
			            $count++;
			            $tempat_tinggal = cek_input($_POST["tempat_tinggal"]);
		            }
	            }

	            //Bagian moda transportasi
	            if (empty($_POST["transportasi"])) {
		            $error_transportasi = "transportasi tidak boleh kosong";
	            }
	            else{
		            if (strlen($_POST['transportasi']) != 2) {
			            $error_transportasi = "Masukkan jumlah angka yang sesuai";
	            	}
		            else if(!is_numeric($_POST['transportasi'])){
			            $error_transportasi = "Inputan harus angka 2 digit";
		            }
		            else{
			            $count++;
			            $transportasi = cek_input($_POST["transportasi"]);
		            }
	            }

	            //Bagian No HP
	            if (empty($_POST["no_hp"])) {
		            $error_no_hp = "Nomor HP tidak boleh kosong";
	            }
	            else{
		            if(!is_numeric($_POST['no_hp'])){
			            $error_no_hp = "Inputan harus angka digit";
		            }
		            else{
			            $count++;
			            $no_hp = cek_input($_POST["no_hp"]);
		            }
            	}

	            //Bafian No telepon
	            if (empty($_POST["no_telepon"])) {
		            $error_no_telepon = "Nomor Telepon tidak boleh kosong";
	            }
	            else{
		            if(!is_numeric($_POST['no_telepon'])){
			            $error_no_telepon = "Inputan harus angka digit";
		            }
		            else{
			            $count++;
			            $no_telepon = cek_input($_POST["no_hp"]);
		            }
	            }

	            //Bagian Email
	            if (empty($_POST["email"])) {
		            $error_email = "Email tidak boleh kosong";
    	        }
	            else{
		            $email = cek_input($_POST["email"]);
		            
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			            $error_email = "Format email Invalid";
		            }
		            else{
			            $count++;
		            }
	            }

	            //Bagian Negara
	            if (empty($_POST["negara"])){
		            $error_negara = "Negara Tidak boleh kosong";
	            }
	            else{
		            $negara = cek_input($_POST["negara"]);
		            
                    if (!preg_match("/^[a-zA-Z]*$/", $negara)) {
			            $negara = "Inputan hanya boleh huruf";
		            }
		            else{
			            $count++;
		            }
	            }

                $jenis_pendaftaran = $_POST["jenis_pendaftaran"];
                $tgl_msk = $_POST["tgl_msk"];
                $nis = $_POST["nis"];
                $no_ujian = $_POST["no_ujian"];
                $paud = $_POST["paud"];
                $tk = $_POST["tk"];
                $skhun = $_POST["skhun"];
                $ijazah = $_POST["ijazah"];
                $hobi = $_POST["hobi"];
                $cita2 = $_POST["cita2"];
                $nama = $_POST["nama"];
                $jenis_kelamin = $_POST["jenis_kelamin"];
                $nisn_sekarang = $_POST["nisn_sekarang"];
                $nik = $_POST["nik"];
                $tempat_lahir = $_POST["tempat_lahir"];
                $tanggal_lahir = $_POST["tanggal_lahir"];
                $agama = $_POST["agama"];
                $berkebutuhan = $_POST["berkebutuhan"];
                $alamat = $_POST["alamat"];
                $rt = $_POST["rt"];
                $rw = $_POST["rw"];
                $dusun = $_POST["dusun"];
                $kelurahan = $_POST["kelurahan"];
                $kecamatan = $_POST["kecamatan"];
                $kode_pos = $_POST["kode_pos"];
                $tempat_tinggal = $_POST["tempat_tinggal"];
                $transportasi = $_POST["transportasi"];
                $no_hp = $_POST["no_hp"];
                $no_telepon=$_POST["no_telepon"];
                $email = $_POST["email"];
                $kps = $_POST["kps"];
                $no_kps = $_POST["no_kps"];
                $kewarganegaraan = $_POST["kewarganegaraan"];
                $negara = $_POST["negara"];
	
                if ($count == 24) {
		            $dbname = 'db_pesertadidik';
		            $conn = mysqli_connect('localhost','root','',$dbname);

		            if(!$conn){
			            echo "Koneksi Error: ".mysqli_connect_error();
		            } 
		            
                    $sql = "INSERT INTO pendaftaran VALUES ('','$jenis_pendaftaran','$tgl_msk','$nis','$no_ujian','$paud','$tk','$skhun','$ijazah','$hobi','$cita2','$nama','$jenis_kelamin','$nisn_sekarang','$nik','$tempat_lahir','$tanggal_lahir','$agama','$berkebutuhan','$alamat','$rt','$rw','$dusun','$kelurahan','$kecamatan','$kode_pos','$tempat_tinggal','$transportasi','$no_hp','$email','$kps','$no_kps','$kewarganegaraan','$negara')";
		            mysqli_query($conn,$sql);
	            }
            }

            function cek_input($data){
	            $data = trim($data);
	            $data = stripslashes($data);
 	            $data = htmlspecialchars($data);
 	            
                 return $data;
            }
        ?>
        
        <div class="row">
        <div class="col-md-12">
        <div class="card" style="width: 100%;">
  	        <div class="card-header">
    	        <h5 class="card-title text-center">FORMULIR PESERTA DIDIK BARU</h5>
  	        </div>
  	
            <div class="card-body">
  		        <form method="POST" 
                    action="
                    <?php 
                        echo htmlspecialchars($_SERVER["PHP_SELF"]);
                    ?>"
                >
  		        <div class="form-group row">
	  		        <label class="col-sm-1 col-form-label">1</label>
			        <label for="jenis_pendaftaran" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
			        
                    <div class="col-sm-1">
				        <input type="text" name="jenis_pendaftaran" 
                            class="form-control 
                                <?php 
                                    echo ($error_jenis_pendaftaran !="" ? "is-invalid" : "") 
                                ?>" 
                            id="jenis_pendaftaran" placeholder="01" 
                            value="
                                <?php 
                                    echo $jenis_pendaftaran; 
                                ?>">
                        <span class="warning">
                            <?php 
                                echo $error_jenis_pendaftaran;
                            ?>
                        </span>
			        </div>
			        <label class="col-lg-4 col-form-label" style="font-size: 14px">
                        (01)Siswa Baru (02)Pindahan
                    </label>	
  		        </div>

  		        <div class="form-group row">
	  		        <label class="col-sm-1 col-form-label">2</label>
			        <label for="tgl_msk" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
			        
                    <div class="col-sm-2">
			        	<input type="date" name="tgl_msk" class="form-control" 
                            value="
                                <?php 
                                    echo $tgl_msk; 
                                ?>"
                        required="">
			        </div>
  		        </div>

  		        <div class="form-group row">
	  	        	<label class="col-sm-1 col-form-label">3</label>
			        <label for="nis" class="col-sm-2 col-form-label">NIS</label>
			
                    <div class="col-sm-3">
				        <input type="text" name="nis" 
                            class="form-control 
                                <?php 
                                    echo($error_nis !="" ? "is-invalid" : "")
                                ?>"
                            id="nis" placeholder="0000xxx" 
                            value="
                                <?php 
                                    echo $nis; 
                                ?>">
                        <span class="warning">
                            <?php 
                                echo $error_nis; 
                            ?>
                        </span>
			        </div>	
  		        </div>

  		        <div class="form-group row">
	  		        <label class="col-sm-1 col-form-label">4</label>
			        <label for="no_ujian" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
			        
                    <div class="col-sm-3">
				        <input type="text" name="no_ujian" 
                            class="form-control 
                                <?php 
                                    echo($error_no_ujian !="" ? "is-invalid" : "")
                                ?>"
                            id="no_ujian" placeholder="000000xxxx" 
                            value="
                            <?php 
                                echo $no_ujian; 
                            ?>">
                        <span class="warning">
                            <?php 
                                echo $error_no_ujian; 
                            ?>
                        </span>
			        </div>
			        <label class="col-sm-6 col-form-label" style="font-size: 12px; font-style:italic;">
                        *Nomor peserta adalah 20 digit yang tertera dalam sertifikat 
                        <span style="color: red">
                            SKHUN SD
                        </span>
                        , diisi bagi peserta didik jenjang SMP
                    </label>	
  		        </div>

  		        <div class="form-group row">
	  		        <label class="col-sm-1 col-form-label">5</label>
			        <label for="paud" class="col-sm-2 col-form-label">Apakah pernah PAUD</label>
			        
                    <div class="col-sm-1">
  				        <label class="form-check-label col-form-label">
   					        <input type="radio" class="form-check-input" name="paud" value="Ya" checked>
                               Ya
  				        </label>
			        </div>
			
                    <div class="col-sm-1">
 				        <label class="form-check-label col-form-label">
    				        <input type="radio" class="form-check-input" name="paud" value="Tidak">
                                Tidak
  				        </label>
			        </div>
  		        </div>

  		        <div class="form-group row">
	  		        <label class="col-sm-1 col-form-label">6</label>
			        <label for="tk" class="col-sm-2 col-form-label">Apakah pernah TK</label>
			        
                    <div class="col-sm-1">
  				        <label class="form-check-label col-form-label">
   					        <input type="radio" class="form-check-input" name="tk" value="Ya" checked>
                               Ya
  				            </label>
			        </div>
			        
                    <div class="col-sm-1">
 				        <label class="form-check-label col-form-label">
    				        <input type="radio" class="form-check-input" name="tk" value="Tidak">
                                Tidak
  				        </label>
			        </div>
  		        </div>

  		        <div class="form-group row">
	  		        <label class="col-sm-1 col-form-label">7</label>
			        <label for="no_ujian" class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
			        
                    <div class="col-sm-3">
				        <input type="text" name="skhun"
                            class="form-control 
                                <?php 
                                    echo($error_skhun !="" ? "is-invalid" : "")
                                ?>"
                            id="skhun" placeholder="0000xxx" 
                            value="
                                <?php 
                                    echo $skhun; 
                                ?>">
                        <span class="warning">
                            <?php 
                                echo $error_skhun; 
                            ?>
                        </span>
			        </div>
			        <label class="col-sm-6 col-form-label" style="font-size: 12px; font-style:italic;">
                        Diisi 16 Digit yang tertera di <span style="color: red">SKHUN SD</span> - diisi bagi PD jenjang SMP
                    </label>	
  		        </div>

  		        <div class="form-group row">
	  		        <label class="col-sm-1 col-form-label">8</label>
			        <label for="ijazah" class="col-sm-2 col-form-label">No. Seri Ijazah Sebelumnya</label>
			
                    <div class="col-sm-3">
				        <input type="text" name="ijazah" 
                            class="form-control 
                                <?php 
                                    echo($error_ijazah !="" ? "is-invalid" : "")
                                ?>"
                            id="ijazah" placeholder="0000xxx" 
                            value="
                                <?php 
                                    echo $ijazah; 
                                ?>">
                        <span class="warning">
                            <?php 
                                echo $error_ijazah; 
                            ?>
                        </span>
			        </div>
			        <label class="col-sm-6 col-form-label" style="font-size: 12px; font-style:italic;">
                        Diisi 16 Digit yang tertera di <span style="color: red">Ijazah SD</span> - diisi bagi PD jenjang SMP
                    </label>	
  		        </div>

  		        <div class="form-group row">
	  		        <label class="col-sm-1 col-form-label">9</label>
			        <label for="Hobi" class="col-sm-2 col-form-label">Hobi</label>
			        
                    <div class="col-sm-1">
				        <input type="text" name="hobi"
                            class="form-control 
                                <?php 
                                    echo ($error_hobi !="" ? "is-invalid" : "") 
                                ?>" 
                            id="hobi" placeholder="A" 
                            value="
                                <?php 
                                    echo $hobi; 
                                ?>">
                        <span class="warning">
                            <?php 
                                echo $error_hobi;
                            ?>
                        </span>
			        </div>
			        <label class="col-lg-5 col-form-label" style="font-size: 14px">
                        (A)Olah Raga 
                        (B)Kesenian 
                        (C)Membaca 
                        (D)Menulis 
                        (E)Traveling 
                        (F)Lainnya
                    </label>	
  		        </div>

  		        <div class="form-group row">
	  		        <label class="col-sm-1 col-form-label">10</label>
			        <label for="Hobi" class="col-sm-2 col-form-label">Cita-cita</label>
			        
                    <div class="col-sm-1">
				        <input type="text" name="cita2" 
                            class="form-control 
                                <?php 
                                    echo($error_cita2 !="" ? "is-invalid" : "")
                                ?>"
                            id="cita2" placeholder="A" 
                            value="
                                <?php 
                                    echo $cita2; 
                                ?>">
                        <span class="warning">
                            <?php 
                                echo $error_cita2; 
                            ?>
                        </span>
			        </div>
			        <label class="col-lg-7 col-form-label" style="font-size: 14px">
                        (A)PNS 
                        (B)TNI/POLRI 
                        (C)Guru/Dosen 
                        (D)Dokter 
                        (E)Politikus 
                        (F)Wiraswasta 
                        (G)Seni/Lukis/Artis/Sejenis 
                        (H)Lainnya
                    </label>	
  		        </div>

  		        <div class="card-header">
    		        <h5 class="card-title text-center">DATA PRIBADI</h5>
  		        </div>
  		        <div class="card-body" 
                  action="
                    <?php 
                        echo htmlspecialchars($_SERVER["PHP_SELF"]);
                    ?>">

  		            <form method="post" 
                        action="
                            <?php 
                                echo htmlspecialchars($_SERVER["PHP_SELF"]);
                            ?>">
  		            <div class="form-group row">
	  		            <label class="col-sm-1 col-form-label">11</label>
			            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
			            
                        <div class="col-sm-8">
				            <input type="text" name="nama" 
                                class="form-control 
                                    <?php 
                                        echo($error_nama !="" ? "is-invalid" : "")
                                    ?>"
                                id="nama" placeholder="Muhammad Ibnu" 
                                value="
                                    <?php 
                                        echo $nama; 
                                    ?>">
                            <span class="warning">
                                <?php 
                                    echo $error_nama; 
                                ?>
                            </span>
			            </div>
  		            </div>

  		            <div class="form-group row">
	  		            <label class="col-sm-1 col-form-label">12</label>
			            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis kelamin</label>
			            
                        <div class="col-sm-1">
  				            <label class="form-check-label col-form-label">
   					            <input type="radio" class="form-check-input" name="jenis_kelamin" checked value="Laki-laki">Laki-laki
  				            </label>
			            </div>
			            
                        <div class="col-sm-2">
 				            <label class="form-check-label col-form-label">
    				            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan
  				            </label>
			            </div>
  		            </div>

  		            <div class="form-group row">
	  		            <label class="col-sm-1 col-form-label">13</label>
			            <label for="nisn_sekarang" class="col-sm-2 col-form-label">NISN</label>
			            
                        <div class="col-sm-4">
				            <input type="text" name="nisn_sekarang" class="form-control <?php echo($error_nisn_sekarang !="" ? "is-invalid" : "")?>"id="nisn_sekarang" placeholder="0000xxx" value="<?php echo $nisn_sekarang; ?>"><span class="warning"><?php echo $error_nisn_sekarang; ?></span>
			            </div>
  		            </div>

  		            <div class="form-group row">
	  		            <label class="col-sm-1 col-form-label">14</label>
			            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
			            
                        <div class="col-sm-6">
				            <input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : "")?>"id="nik" placeholder="0000xxx" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
  		                </div>

  		                <div class="form-group row">
	  		                <label class="col-sm-1 col-form-label">15</label>
			                <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
			                
                            <div class="col-sm-4">
				                <input type="text" name="tempat_lahir" class="form-control <?php echo($error_tempat_tinggal !="" ? "is-invalid" : "")?>"id="tempat_tinggal" placeholder="Jakarta" value="<?php echo $tempat_lahir; ?>"><span class="warning"><?php echo $error_tempat_lahir; ?></span>
			                </div>
  		                </div>

  		                <div class="form-group row">
	  		                <label class="col-sm-1 col-form-label">16</label>
			                <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
			                
                            <div class="col-sm-4">
				                <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $tanggal_lahir; ?>" required="">
			                </div>
  		                </div>

  		                <div class="form-group row">
	  		                <label class="col-sm-1 col-form-label">17</label>
			                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
			                
                            <div class="col-sm-1">
				                <input type="text" name="agama" class="form-control <?php echo($error_agama !="" ? "is-invalid" : "")?>"id="agama" placeholder="01" value="<?php echo $agama; ?>"><span class="warning"><?php echo $error_agama; ?></span>
		                	</div>
			                <label class="col-sm-6 col-form-label" style="font-size: 14px; font-style: italic;">01)Islam 02)Kristen/Protestan 03)Katholik 04)Hindu 05)Budha 06)Khong Hu Chu 99)Lainnya</label>
  		                </div>

  		                <div class="form-group row">
	  		                <label class="col-sm-1 col-form-label">18</label>
			                <label for="berkebutuhan" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
			                
                            <div class="col-sm-1">
				                <input type="text" name="berkebutuhan" class="form-control <?php echo($error_berkebutuhan !="" ? "is-invalid" : "")?>"id="berkebutuhan" placeholder="01" value="<?php echo $berkebutuhan; ?>"><span class="warning"><?php echo $error_berkebutuhan; ?></span>
		                	</div>
			                <label class="col-sm-8 col-form-label" style="font-size: 14px; ">01 Tidak 02 Netra(A) 03 Rungu(B) 04 Grahita ringan(C) 05 Grahita sedang(C1) 06 Daksa Ringan(D) 07 Daksa sedang(D1) 08 Laras(E) 09 Wicara(F) 10 Tuna ganda(G) 11 Hiper aktif(H) 12 Cerdas istimewa(i) 13 Bakat istimewa(J) 14 Kesulitan belajar(K) 15 Narkoba(N) 16 Indigo(O) 17 Down Sindrome(P) 18 Autis(Q)</label>
  		                </div>

  		                <div class="form-group row">
	  		                <label class="col-sm-1 col-form-label">19</label>
			                <label for="alamat" class="col-sm-2 col-form-label">Alamat Jalan</label>
			                <div class="col-sm-8">
				                <input type="text" name="alamat" class="form-control <?php echo($error_alamat !="" ? "is-invalid" : "")?>"id="alamat" placeholder="Jalan Mawar No. 6" value="<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat; ?></span>
			                </div>
  		                </div>

  		                <div class="form-group row">
	  		                <label class="col-sm-1 col-form-label">20</label>
			                <label for="rt" class="col-sm-2 col-form-label">RT</label>
			                <div class="col-sm-1">
				                <input type="text" name="rt" class="form-control <?php echo($error_rt !="" ? "is-invalid" : "")?>"id="rt" placeholder="7" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
  		                    </div>

  		                    <div class="form-group row">
	  		                    <label class="col-sm-1 col-form-label">21</label>
			                    <label for="rw" class="col-sm-2 col-form-label">RW</label>
			                    <div class="col-sm-1">
				                    <input type="text" name="rw" class="form-control <?php echo($error_rw !="" ? "is-invalid" : "")?>"id="rw" placeholder="7" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
  	                        	</div>

  		                        <div class="form-group row">
	  		                        <label class="col-sm-1 col-form-label">22</label>
			                        <label for="dusun" class="col-sm-2 col-form-label">Nama Dusun</label>
			                        <div class="col-sm-6">
				                        <input type="text" name="dusun" class="form-control <?php echo($error_dusun !="" ? "is-invalid" : "")?>"id="dusun" placeholder="Dusun Sumber Urip" value="<?php echo $dusun; ?>"><span class="warning"><?php echo $error_dusun; ?></span>
			                        </div>
  	                        	</div>

  		                        <div class="form-group row">
	  		                        <label class="col-sm-1 col-form-label">23</label>
			                        <label for="kelurahan" class="col-sm-2 col-form-label">Nama Kelurahan/Desa</label>
			                        <div class="col-sm-6">
				                        <input type="text" name="kelurahan" class="form-control <?php echo($error_kelurahan !="" ? "is-invalid" : "")?>"id="kelurahan" placeholder="Tambaksari" value="<?php echo $kelurahan; ?>"><span class="warning"><?php echo $error_kelurahan; ?></span>
			                        </div>
  		                        </div>

  		                        <div class="form-group row">    
	  		                        <label class="col-sm-1 col-form-label">24</label>
			                        <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
			                        <div class="col-sm-6">
				                        <input type="text" name="kecamatan" class="form-control <?php echo($error_kecamatan !="" ? "is-invalid" : "")?>"id="kecamatan" placeholder="Gubeng" value="<?php echo $kecamatan; ?>"><span class="warning"><?php echo $error_kecamatan; ?></span>
			                        </div>
  		                        </div>

  		                        <div class="form-group row">
	  		                        <label class="col-sm-1 col-form-label">25</label>
			                        <label for="kode_pos" class="col-sm-2 col-form-label">Kode Pos</label>
			                        <div class="col-sm-2">
				                        <input type="text" name="kode_pos" class="form-control <?php echo($error_kode_pos !="" ? "is-invalid" : "")?>"id="kode_pos" placeholder="60123" value="<?php echo $kode_pos; ?>"><span class="warning"><?php echo $error_kode_pos; ?></span>
			                        </div>
  		                        </div>

  		                        <div class="form-group row">
	  		                        <label class="col-sm-1 col-form-label">26</label>
			                        <label for="tempat_tinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label>
			                        <div class="col-sm-1">
				                        <input type="text" name="tempat_tinggal" class="form-control <?php echo($error_tempat_tinggal !="" ? "is-invalid" : "")?>"id="tempat_tinggal" placeholder="01" value="<?php echo $tempat_tinggal; ?>"><span class="warning"><?php echo $error_tempat_tinggal; ?></span>
			                        </div>
			                        <label class="col-sm-8 col-form-label" style="font-size: 14px; ">01 Bersama orang tua 02 Wali 03 Kos 04 Asrama 05 Panti Asuhan 99 Lainnya</label>
  		                        </div>

  		                        <div class="form-group row">
	  		                        <label class="col-sm-1 col-form-label">27</label>
			                        <label for="transportasi" class="col-sm-2 col-form-label">Moda Transportasi</label>
			                        <div class="col-sm-1">
				                        <input type="text" name="transportasi" class="form-control <?php echo($error_transportasi !="" ? "is-invalid" : "")?>"id="transportasi" placeholder="01" value="<?php echo $transportasi; ?>"><span class="warning"><?php echo $error_transportasi; ?></span>
			                        </div>
			                        <label class="col-sm-8 col-form-label" style="font-size: 14px; ">01)Jalan kaki 02)Kendaraan pribadi 03)Kendaraan Umum/angkot/Pete-pete 04)Jemputan sekolah 05)Kereta api 06)Ojek 07)Andong/Bendi/Sado/Dokar/Delman/Beca 08)Perahu penyebrangan/Rakit/Getek 99)lainnya</label>
  		                        </div>

  		                        <div class="form-group row">
	  		                        <label class="col-sm-1 col-form-label">28</label>
			                        <label for="no_hp" class="col-sm-2 col-form-label">Nomor HP</label>
			                        <div class="col-sm-4">
				                        <input type="text" name="no_hp" class="form-control <?php echo($error_no_hp !="" ? "is-invalid" : "")?>"id="no_hp" placeholder="08xxxxxx" value="<?php echo $no_hp; ?>"><span class="warning"><?php echo $error_no_hp; ?></span>
			                        </div>
  		                        </div>

  		                        <div class="form-group row">
	  		                        <label class="col-sm-1 col-form-label">29</label>
		                        	<label for="no_telepon" class="col-sm-2 col-form-label">Nomor Telepon</label>
			                        <div class="col-sm-4">
				                        <input type="text" name="no_telepon" class="form-control <?php echo($error_no_telepon !="" ? "is-invalid" : "")?>"id="no_telepon" placeholder="08xxxxxx" value="<?php echo $no_telepon; ?>"><span class="warning"><?php echo $error_no_telepon; ?></span>
			                        </div>
  		                        </div>

  		                        <div class="form-group row">
	  		                        <label class="col-sm-1 col-form-label">30</label>
			                        <label for="email" class="col-sm-2 col-form-label">Email Pribadi</label>
			                        <div class="col-sm-6">
				                        <input type="text" name="email" class="form-control <?php echo($error_email !="" ? "is-invalid" : "")?>"id="email" placeholder="bobi@gmail.com" value="<?php echo $email; ?>"><span class="warning"><?php echo $error_email; ?></span>
			                        </div>
  		                        </div>

  		                        <div class="form-group row">
	  		                        <label class="col-sm-1 col-form-label">31</label>
		    	                    <label for="kps" class="col-sm-2 col-form-label">Penerima KPS/PKH/KIP</label>
			                        <div class="col-sm-1">
  				                        <label class="form-check-label col-form-label">
   					                        <input type="radio" class="form-check-input" name="kps" checked value="Ya">Ya
  				                        </label>
			                        </div>
			                        <div class="col-sm-1">
 				                        <label class="form-check-label col-form-label">
    				                        <input type="radio" class="form-check-input" name="kps" value="Tidak">Tidak
  				                        </label>
			                        </div>
  		                        </div>

  		                        <div class="form-group row">
	  		                        <label class="col-sm-1 col-form-label">32</label>
			                        <label for="no_kps" class="col-sm-2 col-form-label">No. KPS/PKH/KIP</label>
			                        <div class="col-sm-1">
  				                        <label class="form-check-label col-form-label">
   					                        <input type="radio" class="form-check-input" name="no_kps" checked value="Ya">Ya
  			                        	</label>
			                        </div>
			                        <div class="col-sm-1">
 				                        <label class="form-check-label col-form-label">
    				                        <input type="radio" class="form-check-input" name="no_kps" value="Tidak">Tidak
  			                        	</label>
			                        </div>
  		                        </div>

  		                        <div class="form-group row">        
	  		                        <label class="col-sm-1 col-form-label">33</label>
			                        <label for="kewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
			                        <div class="col-sm-2">
  				                        <label class="form-check-label col-form-label">
   					                        <input type="radio" class="form-check-input" name="kewarganegaraan" value="Indonesia(WNI)" checked>Indonesia(WNI)
  			    	                    </label>
			                        </div>
			                        
                                    <div class="col-sm-2">
 				                        <label class="form-check-label col-form-label">
    				                        <input type="radio" class="form-check-input" name="kewarganegaraan" value="Asing(WNA">Asing(WNA)
  				                        </label>
			                        </div>
			                        <label for="negara" class="col-sm-1 col-form-label">Negara</label>
			                        
                                    <div class="col-sm-3">
				                        <input type="text" name="negara" class="form-control <?php echo($error_negara !="" ? "is-invalid" : "")?>"id="negara" placeholder="Indonesia" value="<?php echo $negara; ?>"><span class="warning"><?php echo $error_negara; ?></span>
			                        </div>
  		                        </div>           
                                <br>
                                <br>
  		                        <div class="form-group row">
			                    <div class="text-center">
				                    <button onclick="location.href='exportexcel.php';" id="export" 
									class="btn-primary">Export to Excel</button>
			                    </div>
		                    </div>
		        </form>
  		    </div>
        </div>
        </div>
        </div>
    </body>
</html>