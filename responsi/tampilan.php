<!DOCTYPE html>
<html>
<head>
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			font-family: arial;
			padding: 10px;
			background: #f1f1f1;
			background-image: url("campur.jpg");
		}

		.header {
			padding: 30px;
			text-align: center;
			background: white
		}

		.header h1 {
			font-size: 50px
		}

		.topnav {
			overflow: hidden;
			background-color: #333;
		}

		.topnav a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		.topnav a:hover {
			background-color: #ddd;
			color: black;
		}

		.leftcolumn {
			float: left;
			width: 25%;
			background-color: #f1f1f1;
			padding-left: 20px
		}

		.centercolumn {
			float: left;
			width: 50%;
			background-color: #f1f1f1;
			padding-left: 20px
		}

		.rightcolumn {
			float: left;
			width: 25%;
			background-color: #f1f1f1;
			padding-left: 20px
		}

		.fakeimg {
			background-color: #aaa;
			width: 75%;
		}

		.card {
			background-color: white;
			padding: 20px;
			margin-top: 20px;
		}

		.row:after {
			content: "";
			display: table;
			clear: both;
		}

		.footer {
			padding: 20px;
			text-align: center;
			background-color: #ddd;
			margin-top: 20px;
		}

		.leftcolumn, .rightcolumn {
			width: 100%
			padding0;
		}
	}

	    .topnav a {
	    	float: none;
	    	width: 100%
	    }
	}
	</style>
</head>
<body>

	<div class="header" style="background-color: indianred;">
		<h1 style="font-family: cambria; background-color: lightgray;">AJEY.AN BLOG</h1>
		<p>WELCOM TO MY BLOG.</p>
	</div>

	<div class="rightcolumn">
			<div class="card" style="background-color: pink;">
				<h2 style="font-family: Times New roman">Hallo Perkenalkan Saya Ajay</h2>
				<h4>Saya Kuliah Di Universitas Ahmad Dahlan</h4>
				<div>
					<img src="ajey.jpg" width="280px">
				</div>
			</div>
		</div>

	<div class="row">
		<div class="centercolumn">
			<div class="card" style="background-color: grey">
				<h2 align="center" style="font-family: serif; background-color: pink;">TUGAS AKHIR PEMROGRAMAN WEB</h2><br><br>

				<div style="background-color: lightgrey;">
					<img src="kawah ijen.jpg" width="600px" height="350px">
					<div align="center"><strong><font size="6" face="courier New, courier,mono" style="font-family: cambria">Isi Data Diri</font></strong></div>
		            <form name="nama" method="post" action="proses.php">
			        <table width="58%" border="0" align="center">
				    <tr>
					    <td>Nama lengkap</td>
					    <td><input style="background-color:lightgrey;" type="text" name="nama" id="nama"></td>
				    </tr>
				    <tr>
					    <td>NIM</td>
					    <td><input style="background-color:lightgrey;" type="text" name="nim" id="nim"></td>
				    </tr>
				    <tr>
					    <td>E-mail</td>
					    <td><input style="background-color:lightgrey;" type="text" name="email" id="email"></td>
				    </tr>
				    <tr>
					<td>Prodi</td>
					<td><select style="background-color:lightgrey;" name="prodi" id="prodi">
						<option>Informatika</option>
						<option>Hukum</option>
						<option>PGSD</option>
						<option>Teknik Kimia</option>
						<option>Teknik Industri</option>
					</select></td>
				</tr>
				<tr>
					<td>&nbsp</td>
					<td><input style="background-color:lightgrey;" type="submit" name="submit" value="kirim" id="kirim"><input style="background-color:lightgrey;" type="reset" name="reset" value="batal"></td>
				</tr>
				
			</table>
		</form>
		<br>
		<div align="center"><strong><a href="lihat.php">::Lihat Data Diri::</a></strong></div>
				</div>
			</div>

			<div class="card" style="background-color: grey;">
				<h1><center style="font-family:cursive ; background-color: lightgray;">KALKULATOR</center></h1>
			<table border="1" cellspacing="10" align="center" cellpadding="1" bgcolor="lightgrey">
                <tr>
                    <td colspan="4" id="inputLabel">0</td>
                </tr>

                <tr>
                    <td colspan="3"><button onclick="pushBtn(this);">Reset</button></td>
                    <td><button onclick="pushBtn(this);">/</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">7</button></td>
                    <td><button onclick="pushBtn(this);">8</button></td>
                    <td><button onclick="pushBtn(this);">9</button></td>
                    <td><button onclick="pushBtn(this);">*</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">4</button></td>
                    <td><button onclick="pushBtn(this);">5</button></td>
                    <td><button onclick="pushBtn(this);">6</button></td>
                    <td><button onclick="pushBtn(this);">-</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">1</button></td>
                    <td><button onclick="pushBtn(this);">2</button></td>
                    <td><button onclick="pushBtn(this);">3</button></td>
                    <td><button onclick="pushBtn(this);">+</button></td>
                </tr>

                <tr>
                   <td colspan="2"><button onclick="pushBtn(this);">0</button></td>
                   <td><button onclick="pushBtn(this);">.</button></td>
                   <td><button onclick="pushBtn(this);">=</button></td>
                </tr>
                </table>
                <script type="text/javascript">
                var inputLabel = document.getElementById('inputLabel');
                function pushBtn(obj) {
                    var pushed = obj.innerHTML
                    if (pushed == '=') {
                    // Calculate
                    inputLabel.innerHTML = eval(inputLabel.innerHTML);
                    } else if (pushed == 'Reset') {
                    // All Clear
                    inputLabel.innerHTML = '0';
                    } else {
                        if (inputLabel.innerHTML == '0') {
                               inputLabel.innerHTML = pushed;  
                    } else {
                        inputLabel.innerHTML += pushed;   
                    }
                }
            }
            </script>
            </div>

			<div class="card" style="background-color: grey">
				<h1><center style="background-color: lightgrey;">KALENDER</center></h1>
				<?php
                $hari	= date("d");
                $bulan	= date ("m");
                $tahun	= date("Y");
                $jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
                ?>
                <table style="border:2px solid #00000f " align="center" width="10%" height="35%" bgcolor="lightgrey">
                <tr style="background-color: darkgrey;">
                    <td align=center><font color="#FF0000">Minggu</font></td>
                    <td align=center>Senin</td>
                    <td align=center>Selasa</td>
                    <td align=center>Rabu</td>
                    <td align=center>Kamis</td>
                    <td align=center>Jumat</td>
                    <td align=center>Sabtu</td>
                </tr>
                <?php
                $s=date ("w", mktime (0,0,0,$bulan,1,$tahun));
                for ($ds=1;$ds<=$s;$ds++) {
                    echo "<td></td>";
                }
 
                for ($d=1;$d<=$jumlahhari;$d++) {
	                if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {
		                echo "<tr>"; 
		            }
                $warna="blue";
 
                if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") { $warna="#FF0000"; }
                echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>"; 
                if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) { echo "</tr>"; }
                }
                echo '</table>'; 
				?>
		    </div>
		</div>

		<div class="rightcolumn">
			<div class="card" style="background-color: pink;">
				<h2 style="font-family: serif;">Tentang aku</h2>
				<p>Nama saya Ajay Andrian Yahya biasah di panggil Ajey saya dari Banyuwangi</p>
			</div>

			<div class="card" style="background-color: pink;">
		    <h3>Follow Me</h3>
		    <img src="ig.jpg" width="45px">
		    <a href="https://www.instagram.com/ajey.an/">ajey.an</a><br><br>
		     <img src="fb.png" width="45px">
		     <a href="https://www.facebook.com/profile.php?id=100080285530938">Ajay Andran Yahya</a><br><br>
		     <img src="twitter.jpg" width="45px">
		    <a href="https://twitter.com/Ajeyandrian12">ajayandrian12</a><br><br>
		    <img src="github.png" width="45px">
		    <a href="https://github.com/ajayandrianyahya13/">ajayandrianyahya13
	       </div></a>
		</div>
</div>   
     <div class="footer" style="background-color: grey;">
     	<h2 style="background-color: pink;">Copyright(c) AJEY.AN 2022</h2>
     	<p></p>
     </div>

</body>
</html>