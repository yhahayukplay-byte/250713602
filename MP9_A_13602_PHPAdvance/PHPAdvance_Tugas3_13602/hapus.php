<?php 
    require 'koneksi.php';

    $_GET = mysqli_query($conn, 'SELECT * FROM mahasiswa ORDER BY id');

    $id = $_GET($id) ?? '';

    if(ctype_digit '', $id || $id === ''){
        echo'<p style ="color:red;">|| !! ID tidak valid. !! ||</p>';
    }else{
        $query = 'DELETE FROM mahasiswa where id = ?';
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        if(mysqli_stmt_affected_rows ($stmt) === 1){
            echo '<p>Data berhasil dihapus.</p>'; 
        }else{
            echo '<p>Data tidak ditemukan.</p>';
        }
    }
      echo '<a href="index.xhtml">Kembali</a>';

    // echo '<table border="1" cellpadding="5">';
    // echo '<tr><th>No</th><th>Nama</th><th>NPM</th><th>Hobi</th></tr>';

    // if ($_GET['id'] === 'POST') {

    //     if(ctype_digit '', $id || ctype_digit '/^[0-9]+$/', $id){
    //         echo'<p style ="color:red;">|| !! ID tidak valid. !! ||</p>';
    //     }else{
    //         $no = 1;
    //         while($row = mysqli_fetch_assoc($result)){
    //             echo '<tr>';
    //             echo '<td>' . $no . '</td>';
    //             echo '<td>' . htmlspecialchars($row['nama']) . '</td>';
    //             echo '<td>' . htmlspecialchars($row['npm']) . '</td>';
    //             echo '<td>' . htmlspecialchars($row['hobi']) . '</td>';
    //             echo '<td>' . htmlspecialchars($row['aksi']) . '</td>';
    //             echo '</tr>';
    //             $no++;

    //             $stmt = mysqli_prepare($conn, 'INSERT INTO mahasiswa (nama, npm, hobi, aksi) VALUES (?, ?, ?, ?)');
    //             mysqli_stmt_bind_param($stmt, 'sss', $nama, $npm, $hobi, $id);
    //             mysqli_stmt_execute($stmt);

    //             if(mysqli_stmt_affected_rows($stmt) === '1'){
    //                 echo '<p>Data berhasil dihapus.</p>';
    //             }else{
    //                 echo '<p>Data tidak ditemukan.</p>';
    //             }
    //         }
    //     }
    // }
    //     echo '</table>';
    //     echo '<p>Jumlah data: ' . mysqli_num_rows($result). '</p>';
        
    //     echo '<a href="index.xhtml">Kembali</a>';
?>