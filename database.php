<?php 
class database{
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "ta9"; //isi sesuai nama database anda
	
	function __construct(){
		$this->kon = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
		
	}
	function tampil_data(){
		$data = mysqli_query($this->kon, "SELECT * FROM data");
		//lengkapilah method tampil data
		//query select user
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function input($nama,$alamat,$usia,$film,$wisata){
		$film = implode(", ", $film);
		$wisata = implode(", ", $wisata);
		mysqli_query($this->kon,"INSERT INTO data (nama,alamat,usia,film,wisata) VALUES ('$nama','$alamat','$usia','$film','$wisata')");
		//buatlah method input
		//query inset into user
	}
	function hapus($id){
		mysqli_query($this->kon,"DELETE FROM data WHERE id = '$id' ");
		//buatlah method hapus
		//query delete from id where id ='$id'
	}
	function edit($id){
		$data = mysqli_query($this->kon , "SELECT * FROM data WHERE id ='$id'");
		//lengkapilah method edit
		//query select from user where id ='$id'
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function update($id,$nama,$alamat,$usia,$film,$wisata){
		mysqli_query($this->kon,"UPDATE data SET nama = '$nama',alamat = '$alamat', usia = '$usia' WHERE id = '$id' ");
		//buatlah method update
		//query update user set blablabla where id='$id'
	}
} 
?>