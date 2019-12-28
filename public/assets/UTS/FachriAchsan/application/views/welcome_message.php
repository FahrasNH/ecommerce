<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<style>
        body{
            background  :darkgrey;
            }
        #wrap{
            width       : 800px;
            height      : 720px;
            margin      : auto;
            background  : linen;
            }
        #conten1{
            width       : 300px;
            height      : 640px;
            margin      : 10px;
            float       : left;
            background  : orange;
            }
        #conten1 img{
            padding: 0px;
            margin: 5px;
            }
        #conten1 h2{
            font-family:sans-serif;
            color       : white;
            margin-left : 10px;
            margin-top  : 0px;
            }
        #conten1 p{
            margin      : 10px;
            text-align  : justify;
            font-family :Times New Roman;
            color       :black;
            }
        #conten2{
            width       : 470px;
            height      : 300px;
            margin-top  : 10px;
            float       : left;
            background  :orangered;
            }
        #conten2 img{
            float       : left;
            padding     : 5px;
            margin-inline-start: 155px;
            }
        #conten2 p{
            width       : 470px;
            height      : 40px;
            margin-top  : 0;
            text-align  : 155px;
            line-height: 40px;
            font-family : georgia;
            font-size   : 20px;
            color       :black;
            background  :yellow;
            }
        #conten2 table{
            margin      : 5px;
            font-family : Times New Roman;
            color       : white;
            }
        #conten3{
            width       : 470px;
            height      : 200px;
            margin-top  : 10px;
            float       : left;
            background  :orangered;
            }
        #conten3 img{
            float       : left;
            padding     : 2px;
            margin-inline-start: 155px;
            }
        #conten3 p{
            width       : 470px;
            height      : 40px;
            margin-top  : 0;
            text-align  : 155px;
            line-height : 40px;
            font-family : georgia;
            font-size   : 20px;
            color       : black;
            background  : yellow;
            }
        #conten3 table{
            margin      : 5px;
            font-family : Times New Roman;
            color       : white;
            }
        #conten4{
            width       : 470px;
            height      : 120px;
            margin-top  : 10px;
            float       : left;
            background  :orangered;
            }
        #conten4 img{
            float:left;
            padding     : 5px;
            margin-inline-start: 155px;
        }
        #conten4 p{
            width       : 470px;
            height      : 40px;
            margin-top  : 0;
            text-align  : 155px;
            line-height : 40px;
            font-family : georgia;
            font-size   : 20px;
            color       : black;
            background  : yellow;
            } 
        #conten4 table{
            margin      : 5px;
            font-family : Times New Roman;
            color       : white;
            }
        #footer{
            width       : 780px;
            height      : 50px;
            line-height : 50px;
            font-size   : 15px;
            margin      : auto;
            overflow    : hidden;
            text-align  : center;
            font-family : Times New Roman;
            background  :dimgray;
            color       : white;
            }
        </style>
</head>
<body>
<div id="wrap">
            <div id="conten1">
                <div style="text-align:center;">
                <img src="fr.jpg" width="180px"; height="190px" />
                </div>
                <h2>About Me</h2>
                <p>Hallo, nama saya Fachri Achsan sedang menempuh pendidikan di Universitas Mercu Buana kali ini sedang mempelajari 
                mata kuliah Pemograman Web-1 dan saya sangat tertarik belajar mata kuliah ini karena bisa mendesain halaman web sesuai 
                dengan keinginan sendiri.<hr /></p>
                <h2>Social Media</h2>
                <img src="instagram.png" width="220px";height="60px";>
                <img src="facebook.png" width="220px";height="60px";>
                <img src="whatsapp.png" width="220px";height="60px";>
            </div>
                <div id="conten2">
                 <img src="profil.png" width="25px";height="35px";>
                 <p>My Profil</p>
                   <table>
                       <tr>
                           <td>Nama</td><td>: Fachri Achsan</td>
                       </tr>
                       <tr>
                           <td>Jenis Kelamin</td><td>: Laki-Laki</td>
                       </tr>
                       <tr>
                           <td>Tempat Tanggal Lahir</td><td>: Kebumen, 12 September 1997</td>
                       </tr>
                       <tr>
                           <td>Alamat Lengkap</td><td>: Perum PMI 2 Blok C2 No6 Karawang 41376</td>
                       </tr>
                       <tr>
                           <td>Nomor Telepon</td><td>: 0856 9267 0725</td>
                       </tr>
                       <tr>
                           <td>Agama</td><td>: Islam</td>
                       </tr>
                       <tr>
                           <td>Suku</td><td>: Jawa</td>
                       </tr>
                       <tr>
                           <td>Kebangsaan</td><td>: Indonesia</td>
                       </tr>
                       <tr>
                           <td>Nomor KTP</td><td>: 3215251209970001</td>
                       </tr>
                       <tr>
                          <td>Status Perkawinan</td><td>: Belum Menikah</td>
                     </tr>
                   </table>
                </div>
                <div id="conten3">
                <img src="student.png" width="30px"; height="37px";>
                <p>Education</p>
                    <table>
                        <tr>
                            <td>TK Al-Huda</td><td>: 2002 - 2003</td>
                        </tr>
                        <tr>
                            <td>SDN Wancimekar 1</td><td>: 2003 - 2009</td>
                        </tr>
                        <tr>
                            <td>SMPN 1 Cikampek</td><td>: 2009 - 2012</td>
                        </tr>
                        <tr>
                            <td>SMK Texar Klari</td><td>: 2012 - 2015</td>
                        </tr>
                        <tr>
                            <td>Universitas Mercu Buana</td><td>: 2018 - 2022</td>
                        </tr>
                    </table>
                </div>
                <div id="conten4">
                <img src="work.png" width="25px";height="30px";>
                <p>Work Experience</p>
                    <table>
                        <tr>
                            <td>2015 - 2017</td><td>: PT Astra Honda Motor</td>
                        </tr>
                        <tr>
                            <td>2017 - Sekarang</td><td>: Badan Nasional Pencarian Dan Pertolongan</td>
                        </tr>
                    </table>
                </div>
            <div id="footer">Copy Right | By Fachri Achsan 41518110072 | UMB Menteng | Teknik Informatika</div>
        </div>
        <input type="button" value="Background 1" onclick="warna('#8FBC8F')"; />
        <input type="button" value="Background 2" onclick="warna('#BDB76B')"; />
        <script type="text/javascript">
            function warna (color){
                document.body.style.background=color;
                }
        </script>	
	</body>
</html>