<?php 
ob_start ();
try {
	$baglanti=new PDO("mysql:host=localhost;dbname=proje;charset=utf8","root","");
	$baglanti->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
	die($e->getMessage());
}

class yonetim{
	

	function sorgum($vt,$sorgu,$tercih=0) {
		$al=$vt->prepare($sorgu);
		$al->execute();

		if ($tercih==1):
			return $al->fetch();
		elseif ($tercih==2):
			return $al;

		endif;

		
	}

	function kisiekle($baglanti) {
		$sonuc=self::sorgum($baglanti,"SELECT * from bilgiler",1);

		if ($_POST):
		
			$tc=htmlspecialchars($_POST["tc"]);
			$ad=htmlspecialchars($_POST["ad"]);
			$soyad=htmlspecialchars($_POST["soyad"]);
			$meslek=htmlspecialchars($_POST["meslek"]);
			$mailadres=htmlspecialchars($_POST["mailadres"]);
			$telno=htmlspecialchars($_POST["telno"]);
			$cinsiyet=htmlspecialchars($_POST["cinsiyet"]);
			$dogumtarih=htmlspecialchars($_POST["dogumtarih"]);
			$sistem=htmlspecialchars($_POST["sistem"]);
			$adres=htmlspecialchars($_POST["adres"]);
			$kisibilgi=htmlspecialchars($_POST["kisibilgi"]);
			$grupbilgisi=htmlspecialchars($_POST["grupbilgisi"]);
			
			$kaydet=$baglanti->prepare("INSERT INTO bilgiler set tc=?,ad=?,soyad=?,meslek=?,mailadres=?,telno=?,cinsiyet=?,dogumtarih=?,sistem=?,adres=?,kisibilgi=?,grupbilgisi=? ");



			$kaydet->bindParam(1,$tc,PDO::PARAM_STR);
			$kaydet->bindParam(2,$ad,PDO::PARAM_STR);
			$kaydet->bindParam(3,$soyad,PDO::PARAM_STR);
			$kaydet->bindParam(4,$meslek,PDO::PARAM_STR);
			$kaydet->bindParam(5,$mailadres,PDO::PARAM_STR);
			$kaydet->bindParam(6,$telno,PDO::PARAM_STR);
			$kaydet->bindParam(7,$cinsiyet,PDO::PARAM_STR);
			$kaydet->bindParam(8,$dogumtarih,PDO::PARAM_STR);
			$kaydet->bindParam(9,$sistem,PDO::PARAM_STR);
			$kaydet->bindParam(10,$adres,PDO::PARAM_STR);
			$kaydet->bindParam(11,$kisibilgi,PDO::PARAM_STR);
			$kaydet->bindParam(12,$grupbilgisi,PDO::PARAM_STR);
			$kaydet->execute();
			echo'<div class="alert alert-success mt-4" role="alert">
			<strong> Kişi </strong>, Başarılı bir şekilde kişi kaydedildi. </div>';
			header("refresh:2,url=control.php");
		else:
			?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
				<div class="row ">
				  <div class="col-lg-12 border-bottom"><h3 class="float-left mt-3 text-info">Kişi Ekle</h3></div> 
			
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Personel TC</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="tc" class="form-control" placeholder="Lütfen TC Giriniz..." />
								
							</div>
						</div>
					</div>
				
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Personel Ad</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="ad" class="form-control" placeholder="Lütfen Adınızı Giriniz..."  />
							</div>
						</div>
					</div>
				
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Personel Soyad</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="soyad" class="form-control" placeholder="Lütfen Soyadınızı Giriniz..."   />
							</div>
						</div>
					</div>
				
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Meslek</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="meslek" class="form-control" placeholder="Lütfen Mesleğini Giriniz..." />
							</div>
						</div>
					</div>
				
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Mail Adres</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="mailadres" class="form-control" placeholder="Lütfen Mail Adresinizi Giriniz..."  />
							</div>
						</div>
					</div>
					
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Tel no</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="tel" name="telno" class="form-control" placeholder="Lütfen Telefon Numaranızı Giriniz..."  />
							</div>
						</div>
					</div>
				
					
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Cinsiyet</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="cinsiyet" class="form-control" placeholder="Lütfen Cİnsiyetinizi Giriniz..."  />
							</div>
						</div>
					</div>
					
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Doğum Tarihi</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="dogumtarih" class="form-control" placeholder="Lütfen Doğum Tarihinizi Giriniz..."  />
							</div>
						</div>
					</div>
				
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Sisteme Eklenme Tarihi</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="sistem" class="form-control" placeholder="Lütfen Sisteme Eklenme Tarihini Giriniz..."  />
							</div>
						</div>
					</div>
				
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Adres Bilgisi</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="adres" class="form-control" placeholder="Lütfen Adresini Giriniz..."  />
							</div>
						</div>
					</div>
				
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span class="siteayarfont">Kişi Hakkında Kısa Bilgi</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="kisibilgi" class="form-control" placeholder="Lütfen Hakkınızda Kısa Bilginizi Giriniz..."  />
							</div>
						</div>
					</div>

						<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span class="siteayarfont">Grup Bilgi</span>
							</div>
							<div class="col-lg-8 p-1">
							<select type="text" name="grupbilgisi" class="form-control">
                               <option value=''> ---Grubu Seçiniz---</option>
                               <option value='Web Birimi'> Web Birimi </option>
                               <option value='Sistem Birimi'> Sistem Birimi </option>
                               <option value='Nerwork Birimi'> Network Birimi </option>
                               <option value='İdari Birimi'> İdari Birimi </option>
                            </select>
							</div>
						</div>
					</div>


					

					

													

					<div class="col-lg-8 mx-auto mt-2 border-bottom">
						<input type="submit" name="buton" class="btn btn-info m-1 pull-right" value="Kaydet"  />
					</div> 

				</div>

			</form>

	

	


			<?php



		endif;


	}
   

	function sifrele($veri) {
		return base64_encode(gzdeflate(gzcompress(serialize($veri))));

	}
	

	function coz($veri) {
		return unserialize(gzuncompress(gzinflate(base64_decode($veri))));

	}
	function kuladial($vt) {
		$cookid=$_COOKIE["kulbilgi"];
		$cozduk=self::coz($cookid);
		$sorgusonuc=self::sorgum($vt, "SELECT * from yonetim where id=$cozduk",1);
		return $sorgusonuc["kulad"];
	}



	function giriskontrol($kulad, $sifre, $vt) {

		 $sifrelihal=md5(sha1(md5($sifre)));	


		$sor=$vt->prepare("SELECT * from yonetim where kulad='$kulad' and sifre='$sifrelihal' ");
		$sor->execute();

		

		if($sor->rowCount()==0):
			echo '<div class="container-fluid bg-white ">
            <div class="alert alert-white  mt-5 col-md-5 mx-auto p-3 text-dark font-14 font-weight-bold"><img src="assets/images/loader-2.gif" width="90"alt="" />GİRİŞ BİLGİLERİ HATALI</div> 
            </div>';
			header("refresh:2, url=index.php");

		else:
			$gelendeger=$sor->fetch();
			
			$sor=$vt->prepare("UPDATE yonetim set aktif=1 where kulad='$kulad' and sifre='$sifrelihal'");
			$sor->execute();

			echo '
			<div class="container-fluid bg-white ">
            <div class="alert alert-white  mt-5 col-md-5 mx-auto p-3 text-dark font-14 font-weight-bold"><img src="assets/images/loader-2.gif" width="90"alt="" />KULLANICI ADI VE ŞİFRE DOĞRU...<br>Sayfa Yükleniyor Lütfen Bekleyiniz.</div> 
            </div>
            ';
			header("refresh:2, url=control.php");

		
			 $id=self::sifrele($gelendeger["id"]);

			setcookie("kulbilgi", $id, time() + 60*60*24);


		endif;


	}


	function cikis($vt) {
		$cookid=$_COOKIE["kulbilgi"];
		

		$cozduk=self::coz($cookid);

	    self::sorgum($vt,"UPDATE yonetim set aktif=0 where id=$cozduk",0);
	    setcookie("kulbilgi",$cookid,time() -5);
	    echo '<div class="alert alert-info mt-5 col-md-5 mx-auto">BASARILI BIR SEKILDE CIKIS YAPTINIZ</div>';
	    header ("refresh:2, url=index.php");
	}



	function kontrolet($sayfa) {

		if(isset($_COOKIE["kulbilgi"])) :

			if($sayfa=="ind") : header("Location:control.php"); endif;
		else:
			if($sayfa=="cot") : header("Location:index.php"); endif;
	    endif;

	}

	function kisiliste($vt){

		echo '<div class="row text-center">
	<div class="col-lg-12 border-bottom"><h3 class="float-left mt-3 text-info">Kişi Liste</h3></div>';

	?>
	
	<form action="control.php?sayfa=kisiliste" method="post">
	<div class="col-lg-200 mx-auto mt-2">
	<div class="row">
		<div class="col-lg-4 pt-3">
			<span class="siteayarfont">Grup Bilgi</span>
		</div>
		<div class="col-lg-8 p-1">
		<select type="text" name="grupbilgisi" class="form-control">
		   <option value=''> ---Grubu Seçiniz---</option>
		   <option value='Web Birimi'> Web Birimi </option>
		   <option value='Sistem Birimi'> Sistem Birimi </option>
		   <option value='Nerwork Birimi'> Network Birimi </option>
		   <option value='İdari Birimi'> İdari Birimi </option>
		</select>
		</div>
	</div>
</div>

</form>
<?php

	$al=self::sorgum($vt,"SELECT * from bilgiler",2);
    echo '<div class="row text-center">
    <div class="col-lg-600 mt-500 mx-auto">
    <div class="card">
    <div class="card-body">
    <div class="single-table">
    <div class="table-responsive">
    <table class="table text-center border">
    <thead class="text-uppercase">
    <tr>
    <th scope="col" class="border-right">Personel TC</th>
	<th scope="col" class="border-right">Personel Adı</th>
	<th scope="col" class="border-right">Personel Soyadı</th>
	<th scope="col" class="border-right">Personel Mesleği</th>
	<th scope="col" class="border-right">Mail adresi</th>	
	<th scope="col" class="border-right">Tel no</th>
	<th scope="col" class="border-right">Cinsiyet</th>
	<th scope="col" class="border-right">Doğum Tarihi</th>
	<th scope="col" class="border-right">Sisteme Eklenme Tarihi</th>
	<th scope="col" class="border-right">Adres Bilgisi</th>
	<th scope="col" class="border-right">Kişi Hakkında Kısa Bilgi</th>
	<th scope="col" class="border-right">Grup Bilgisi</th>
	<th scope="col">İşlemler</th>
    </tr>
    </thead>
    <tbody>';
    while($liste=$al->fetch(PDO::FETCH_ASSOC)):
        echo '<tr>
        <th scope="row" class="border-right">'.$liste["tc"].'</th>
        <th scope="row" class="border-right">'.$liste["ad"].'</th>
		<th scope="row" class="border-right">'.$liste["soyad"].'</th>
		<th scope="row" class="border-right">'.$liste["meslek"].'</th>
		<th scope="row" class="border-right">'.$liste["mailadres"].'</th>
		<th scope="row" class="border-right">'.$liste["telno"].'</th>
		<th scope="row" class="border-right">'.$liste["cinsiyet"].'</th>
		<th scope="row" class="border-right">'.$liste["dogumtarih"].'</th>
		<th scope="row" class="border-right">'.$liste["sistem"].'</th>
		<th scope="row" class="border-right">'.$liste["adres"].'</th>
		<th scope="row" class="border-right">'.$liste["kisibilgi"].'</th>
		<th scope="row" class="border-right">'.$liste["grupbilgisi"].'</th>
		<div class="col-lg-6 text-left">
		<th scope="row"><a href="control.php?sayfa=yonsil&id='.$liste["id"].'">
        <i class="ti-trash text-danger" style="font-size:20px;"></i></a></th>
        </tr>';

    endwhile;

    echo '</tbody>
    </table>
    </div></div></div></div></div>';




	}   

		


  
function yonsil($vt,$liste){
    echo '<div class="row mt-2">
   <div class="col-lg-12 mt-2 font-weight-bold">
   <div class="alert alert-info mt-2 mb-2">Kişi Silindi.</div>
   </div></div>';
   header("refresh:2,url=control.php?");
   self::sorgum($vt,"DELETE from bilgiler where id=$liste",0);

}


function loglar($baglanti){

	$ipAdresi = $_SERVER["REMOTE_ADDR"];
	
	$engellenmisIP = array("::1", "127.0.0.1");
	
	if (in_array($ipAdresi, $engellenmisIP)) {
	

	  echo "Engellenmiş IP";
	
	} else {
	

	  echo "Hoşgeldiniz";
	
	}



}

function kulbilgi($baglanti) {
    $id=self::coz($_COOKIE["kulbilgi"]);
    $sonuc=self::sorgum($baglanti,"SELECT * FROM yonetim where id=$id",1 );
    if($_POST):

        @$kulad=htmlspecialchars($_POST["kulad"]);
        @$eskisif=htmlspecialchars($_POST["sifre"]);
        @$yenisif=htmlspecialchars($_POST["yenisifre"]);
        @$yenisif2=htmlspecialchars($_POST["yenisifre2"]);
        
        if($kulad=="" || $eskisif=="" || $yenisif=="" || $yenisif2==""):
            echo '<div class="alert alert-danger mt-5">Hiçbir alan boş geçilemez.</div>';
            header("refresh:2,url=control.php?sayfa=kulbilgi");
        else:
        $sifrelihal=md5(sha1(md5($eskisif)));
        if($sonuc['sifre']!=$sifrelihal):
            echo '<div class="alert alert-danger mt-5">Eski şifre hatalı girildi.</div>';
            header("refresh:2,url=control.php?sayfa=kulbilgi");
        else:
            if($yenisif!=$yenisif2):
                echo '<div class="alert alert-danger mt-5">Yeni şifreler eşleşmiyor.</div>';
                header("refresh:2,url=control.php?sayfa=kulbilgi");
            else:
                $yenisifson=md5(sha1(md5($yenisif)));
                $guncelleme=$baglanti->prepare("update yonetim set 
                kulad=?,sifre=? where id=$id");
                $guncelleme->bindParam(1,$kulad,PDO::PARAM_STR);
                $guncelleme->bindParam(2,$yenisifson,PDO::PARAM_STR);
                $guncelleme->execute();
                echo '<div class="alert alert-success mt-5">
               Bilgiler başarıyla güncellendi.
                </div>';
                header("refresh:2,url=control.php?sayfa=kulbilgi");
            endif;
        endif;
    endif;

    else:
    ?>
  <form action="control.php?sayfa=kulbilgi" method="post">
    <div class="row text-center">
    <div class="col-lg-5 mx-auto">
    <div class="col-lg-12 mx-auto mt-2">
    <h3 class="text-info">Kullanıcı Ayarları
 
    </h3>
    </div>
    <div class="col-lg-12 mx-auto border">
    <div class="row">
    <div class="col-lg-4 border-right pt-3 text-left">
    <span id="siteayarfont">Kullanıcı Adı</span>
    </div>
    <div class="col-lg-8 p-1">
    <input type="text" name="kulad" class="form-control" value="<?php echo $sonuc['kulad']; ?>" />
    </div>
    </div>
    </div>
    <!--ara-->
    <div class="col-lg-12 mx-auto border">
    <div class="row">
    <div class="col-lg-4 border-right pt-3 text-left">
    <span id="siteayarfont">Şifre</span>
    </div>
    <div class="col-lg-8 p-1">
    <input type="password" name="sifre" class="form-control" />
    </div>
    </div>
    </div>
    <!--ara-->
    <div class="col-lg-12 mx-auto border">
    <div class="row">
    <div class="col-lg-4 border-right pt-3 text-left">
    <span id="siteayarfont">Yeni Sifre</span>
    </div>
    <div class="col-lg-8 p-1">
    <input type="password" name="yenisifre" class="form-control" />
    </div>
    </div>
    </div>
    <!--ara-->
    <div class="col-lg-12 mx-auto border">
    <div class="row">
    <div class="col-lg-4 border-right pt-3 text-left">
    <span id="siteayarfont">Yeni Sifre Tekrar</span>
    </div>
    <div class="col-lg-8 p-1">
    <input type="password" name="yenisifre2" class="form-control" />
    </div>
    </div>
    </div>
  
    <div class="col-lg-12 mx-auto mt-2">
    <input type="submit" name="buton" class="btn btn-info m-1" value="Değiştir" />
    </div>
    </div>
    </div>
    </form>
   <?php
  endif;

}
}

?>


