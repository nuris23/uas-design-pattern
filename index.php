<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE> BELAJAR WEB DESIGN </TITLE>
	</HEAD>
	
	
	<style type="text/css">
	#menu, #menu ul {
		margin: 0;
		padding: 0;
		list-style: none;
		list-style-type: none;
		list-style-position: initial;
		list-style-image: initial;	
	}
#menu {
	width: 960px;
	margin: 60px auto;
	border-top: 1px solid #d0d0d0;
    border-top-width: 1px;
    border-top-style: solid;
    border-top-color: rgb(208, 208, 208);
    border-bottom: 1px solid #d0d0d0;
    border-bottom-width: 1px;
    border-bottom-style: solid;
    border-bottom-color: rgb(208, 208, 208);
    height: 36px;
    -webkit-box-shadow: 0 2px 0 rgba(0, 0, 0, 0.2);
    box-shadow: 0 2px 0 rgba(0, 0, 0, 0.2);
    background-color: #fbfbfb;
		
}

#menu:before, #menu:after {
		content: "";
		display: table;
	}
#menu:after {
		clear: both;
	}
#menu {
		zoom:1;
	}
#menu li {
		float: left;
		position: relative;
		border-right: 2px solid #d0d0d0;
		border-right-width: 2px;
		border-right-style: solid;
		border-right-color: rgb(208, 208, 208);
	}
#menu a {
		float: left;
		padding: 12px 30px;
		color: #000;
		text-transform: uppercase;
		font: bold 14px Arial;
		text-decoration: none;
	}

#menu a:hover {
		color: #000;
		}

#menu ul {			
		margin: 20px 0 0 0;
		_margin: 0; /*IE6 only*/
		opacity : 0;
		visibility: hidden;
		position: absolute;
		top: 38px;
		left: 0;
		background: #FAFAFA;
		-webkit-transition: all .1s ease-in-out;
		-moz-transition: all .1s ease-in-out;
		-ms-transition: all .1s ease-in-out;
		-o-transition: all .1s ease-in-out;
		transition: all .1s ease-in-out; 
		-moz-box-shadow: 0 -1px rgba(255,255,255,.3);
		-webkit-box-shadow: 0 -1px 0 rgba(255,255,255,.3);
		box-shadow: 0 -1px 0 rgba(255,255,255,.3);
		-moz-border-radius: 3px;
		-webkit-border-radius: 3px;
		border-radius: 3px;
		}
#menu li:hover > ul
	{
		opacity: 1;
		visibility: visible;
		margin: 0;
	}
#menu ul ul {
		top: 0;
		left: 150px;
		margin: 0 0 0 20px;
		_margin: 0; /*IE6 only*/
		-moz-box-shadow: -1px 0 0 rgba(255,255,255,.3);
		-webkit-box-shadow: -1px 0 0 rgba(255,255,255,.3);
		box-shadow: -1px 0 0 rgba(255,255,255,.3);
		}
#menu ul li {
		float: no;
		display: block;
		border: 0;
	}
#menu ul li:last-child {  
		-moz-box-shadow: none;
		-webkit-box-shadow: none;
		box-shadow: none;   
	}
#menu ul a {   
		padding: 10px;
		width: 130px;
		_height: 10px; /*IE6 only*/
		display: block;
		white-space: nowrap;
		float: none;
		text-transform: none;
	}
#menu ul a:hover {
		background-color: #FF004D;
	}
#menu ul li:first-child > a{
		-moz-border-radius: 3px 3px 0 0;
		-webkit-border-radius: 3px 3px 0 0;
		border-radius: 3px 3px 0 0;
	}
#menu ul li:last-child > a{
		-moz-border-radius: 0 0 3px 3px;
		-webkit-border-radius: 0 0 3px 3px;
		border-radius: 0 0 3px 3px;
}

#menu ul li:first-child > a:after {
		content: '';
		position: absolute;
		left: 40px;
		top: -6px;
		border-left: 6px solid transparent;
		border-right: 6px solid transparent;
		border-bottom: 6px solid #444;
	}
#menu ul ul li:first-child a:after {
		left: -6px;
		top: 50%;
		margin-top: -6px;
		border-left: 0;
		border-bottom: 6px solid transparent;
		border-top: 6px solid transparent;
		border-right: 6px solid #3b3b3b;
	}
#menu ul li:first-child a:hover:after {
		border-bottom-color: #04acec;
	}
#menu ul ul li:first-child a:hover:after {
		border-right-color: #0299d3;
		border-bottom-color: transparent;
		}

#menu ul li:last-child > a {
		-moz-border-radius: 0 0 3px 3px;
		-webkit-border-radius: 0 0 3px 3px;
		border-radius: 0 0 3px 3px;		
		
	</style>
	
	
	<BODY bgcolor="#4697dc">
	
		<table align=center border=1 width=960px cellpadding=2 cellspacing=0 >
			<tr>
				<td colspan=2 height=10>
				
				<img src="162405-1450421689-609904.jpg"/ width="970px" height="219px" align="center">
				
				
				<div id=page class="navbar">
				<ul id="menu">
						<li><a href="#">Home</a></li>
						<li><a href="#">Food</a></li>
						<li><a href="#">Healthy</a></li>
						<li><a href="#">Tips</a></li>
						<li><a href="#">About food</a></li>
						<li><a href="#">Healthy style</a></li>
												
					</ul>
			
			</ul>
				</td>				
			</tr>
			<tr>
				<td width=200 height=700 valign="top"> 
					<table border=5 width=100% cellpadding=5 cellspacing=0>
						<tr> <td><a href=#> Makanan Sehat </a></td> </tr>
						<tr> <td><a href=#> Minuman Sehat </a></td> </tr>
						<tr> <td><a href=#> Tips Sehat </a></td> </tr>
						<tr> <td><a href=#> Pola Hidup Sehat </a></td> </tr>
						<tr> <td><a href=#> More Info </a></td>
			</tr>
					</table>
				</td>
			<td valign="top"> 
					<H3 align=center> HIDUP SEHAT </H3>
					<img src="./img/Buah-dan-sayuran.jpg" width=700 height=300/>
					<p align=left>
					Menjaga pola makanan yang harus makan tersebut memenuhi standart kesehatan. Untuk itu kita dianjurkan mengetahui tentang makanan-makanan yang penting untuk kesehatan tubuh kita. Pada umumnya, banyak orang sering tidak memperhatikan tentang hal ini. Banyak sekali makan yang bisa membahayakan bagi tubuh kita. 
					Seperti makanan yang banyak mengandung pengawet, makanan junk food atau makanan cepat saji. 
					Sebaiknya kita bisa mengatur pola makan kita seperti waktu-waktu yang baik untuk kita makan dan juga makan menyehatkan.

					</p>
				</td>
		
			<tr>
				<td colspan=2 align=center><font size=2> Copyright &copy; 2015 Web Design Class</font> </td>
			</tr>
		</table>
						
		</div>
		
	</BODY>
</HTML>