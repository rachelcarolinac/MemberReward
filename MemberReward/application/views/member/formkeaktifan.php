<html>
<head>
	<title><h1> Form Keaktifan Member</h1></title>

		<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<form>
<div class="container">
	<label> Member ID:
	</label> 
<input type="text" id="memberid" name="memberid">
</div>
<div>
	<label> Jenis Acara:
	 <form action="" method="post">   
 		<select name="jenis_acara">  
 		<option value="">Silahkan Pilih</option>  
 		<option value="1">1. Panita Seminar Internasional (point 300)</option>  
 		<option value="2">2. Panitia Seminar Nasional (point 200)</option>  
 		<option value="3">3. Peserta Seminar Internasional (point 150)</option>  
 		<option value="4">4. Peserta Seminar Nasional (point100)</option>  
 		</select>   
 		<input type="submit" name="enter" value="Enter">   
	</form>
	</label>
	<input type = "text" name="jenis_acara" id = "jenis_acara" required="" value="1","2","3","4">
</div>
<div class="form">
	<label> Upload Sertifikat:
	</label>
		<label for = "userfile">Upload Sertifikat (JPG/PNG Max 2 MB)</label>
			<input type = "file" name = "userfile" size = "20" class = "form-control" accept="image/gif, image/jpg, image/jpeg, image/png" required/>
				<span id="file_error"></span> 
</div>
<label> Submit :
</label>
<input type="submit" >
<button type = "submit" class = "btn btn-primary">Submit</button>

</form>
</body>
</html>