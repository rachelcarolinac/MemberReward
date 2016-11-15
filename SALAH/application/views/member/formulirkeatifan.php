<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Form Keaktifan Member</title>
    
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Keaktifan Member</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="index.html" method="post">
      
        <h1>Form Keaktifan Member</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Member Info</legend>
          <label for="name">Member ID:</label>
          <input type="text" id="memberid" name="memberid">

        <label for="acara">Jenis Acara:</label>
        <select id="acara" name="jenis_acara">
            <option value="">Silahkan Pilih</option>
            <option value="1">1. Panita Seminar Internasional 300</option>
            <option value="2">2. Panitia Seminar Nasional 200</option>
            <option value="3">3. Peserta Seminar Internasional 150</option>
            <option value="4">>4. Peserta Seminar Nasional 100</option>
          </optgroup>
        </select>
          
          <label for="form">Upload Srtifikat</label>
          <label for = "userfile">Upload Sertifikat (JPG/PNG Max 2 MB)</label>
             <input type = "file" name = "userfile" size = "20" class = "form-control" accept="image/gif, image/jpg, image/jpeg, image/png" required/>
            <span id="file_error"></span>
        </fieldset>
        
        <button type="submit">Submit</button>
      </form>
      
    </body>
</html>
    
    
    
    
  </body>
</html>
