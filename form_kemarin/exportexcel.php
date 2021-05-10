<?php
    $koneksi = mysqli_connect("localhost","root","","db_pesertadidik");
    require 'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    $spreadsheet = new Spreadsheet ();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'No');
    $sheet->setCellValue('B1', 'ID');
    $sheet->setCellValue('C1', 'Jenis Pendaftaran');
    $sheet->setCellValue('D1', 'Tanggal Masuk');
    $sheet->setCellValue('E1', 'NIS');
    $sheet->setCellValue('F1', 'No Ujian');
    $sheet->setCellValue('G1', 'Paud');
    $sheet->setCellValue('H1', 'TK');
    $sheet->setCellValue('I1', 'SKHUN');
    $sheet->setCellValue('J1', 'Ijazah');
    $sheet->setCellValue('K1', 'Hobi');
    $sheet->setCellValue('L1', 'Cita-cita');
    $sheet->setCellValue('M1', 'Nama');
    $sheet->setCellValue('N1', 'Jenis Kelamin');
    $sheet->setCellValue('O1', 'NISN');
    $sheet->setCellValue('P1', 'NIK');
    $sheet->setCellValue('Q1', 'Tempat Lahir');
    $sheet->setCellValue('R1', 'Tanggal Lahir');
    $sheet->setCellValue('S1', 'Agama');
    $sheet->setCellValue('T1', 'Berkebutuhan Khusus');
    $sheet->setCellValue('U1', 'Alamat');
    $sheet->setCellValue('V1', 'RT');
    $sheet->setCellValue('W1', 'RW');
    $sheet->setCellValue('X1', 'Dusun');
    $sheet->setCellValue('Y1', 'Kelurahan');
    $sheet->setCellValue('Z1', 'Kecamatan');
    $sheet->setCellValue('AA1', 'Kode Pos');
    $sheet->setCellValue('AB1', 'Tempat Tinggal');
    $sheet->setCellValue('AC1', 'Transportasi');
    $sheet->setCellValue('AD1', 'No HP');
    $sheet->setCellValue('AE1', 'Email');
    $sheet->setCellValue('AF1', 'KPS');
    $sheet->setCellValue('AG1', 'No KPS');
    $sheet->setCellValue('AH1', 'Kewarganegaraan');
    $sheet->setCellValue('AI1', 'Negara');

    $query = mysqli_query($koneksi, "select * from peserta_didik");
    $i = 2;
    $no = 1;
    while($row = mysqli_fetch_array($query)){
        $sheet->setCellValue('A'.$i,$no++);
	    $sheet->setCellValue('B'.$i,$row['jenis_pendaftaran']);
	    $sheet->setCellValue('C'.$i,$row['tgl_msk']);
	    $sheet->setCellValue('D'.$i,$row['nis']);
	    $sheet->setCellValue('E'.$i,$row['no_ujian']);
	    $sheet->setCellValue('F'.$i,$row['paud']);
	    $sheet->setCellValue('G'.$i,$row['tk']);
	    $sheet->setCellValue('H'.$i,$row['skhun']);
	    $sheet->setCellValue('I'.$i,$row['ijazah']);
	    $sheet->setCellValue('J'.$i,$row['hobi']);
	    $sheet->setCellValue('K'.$i,$row['cita2']);
	    $sheet->setCellValue('L'.$i,$row['nama']);
	    $sheet->setCellValue('M'.$i,$row['jenis_kelamin']);
	    $sheet->setCellValue('N'.$i,$row['nisn_sekarang']);
	    $sheet->setCellValue('O'.$i,$row['nik']);
        $sheet->setCellValue('P'.$i,$row['tempat_lahir']);
        $sheet->setCellValue('R'.$i,$row['tanggal_lahir']);
        $sheet->setCellValue('S'.$i,$row['agama']);
        $sheet->setCellValue('T'.$i,$row['berkebutuhan']);
        $sheet->setCellValue('U'.$i,$row['alamat']);
        $sheet->setCellValue('V'.$i,$row['rt']);
        $sheet->setCellValue('W'.$i,$row['rw']);
        $sheet->setCellValue('X'.$i,$row['dusun']);
        $sheet->setCellValue('Y'.$i,$row['kelurahan']);
        $sheet->setCellValue('Z'.$i,$row['kecamatan']);
        $sheet->setCellValue('AA'.$i,$row['kode_pos']);
        $sheet->setCellValue('AB'.$i,$row['tempat_tinggal']);
        $sheet->setCellValue('AC'.$i,$row['transportasi']);
        $sheet->setCellValue('AD'.$i,$row['no_hp']);
        $sheet->setCellValue('AE'.$i,$row['email']);
        $sheet->setCellValue('AF'.$i,$row['kps']);
        $sheet->setCellValue('AG'.$i,$row['no_kps']);
        $sheet->setCellValue('AH'.$i,$row['kewarganegaraan']);
        $sheet->setCellValue('AI'.$i,$row['negara']);
        $i++;
    }

    $styleArray = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            ],
        ],
    ];
    var_dump($i);
    $i = $i - 1;
    $sheet->getStyle('A1:AI'.$i)->applyFromArray($styleArray);

    $writer = new Xlsx($spreadsheet);
    $writer->save('Report Peserta Didik.xlsx'); 
?>
<html>
    <head>
        <title>Export to Excel</title>	
    </head>
    <body>
    <center>
        <h1>Berhasil Export</h1>
    </center>
    </body>
 </html>