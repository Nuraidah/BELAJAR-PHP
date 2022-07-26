<!DOCTCPE html>
<html>
<head>
<title>Tambah Data</title>
</head>
<body>

<form action ="aksitambah.php" method="POST">
<table border = "1" align="Center" 
align =center> <caption>Tambah Data</caption>
<thead>
<tr>
                <td>NIS</td>
                <td><input type ="text" name ="nis" ></td>
            </tr>
        </thead>
        <body>
            <tr>
                <td>Nama</td>
                <td><input type ="text" name ="nama" ></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type ="text" name ="alamat" ></td>
            </tr>
            <tr> 
                <td>JK</td>
                <td><input type ="text" name ="jK" ></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type ="text" name ="agama" ></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type ="text" name ="status" ></td>
            </tr>
           
        <tr>
        <td><input type = "Reset" value = "Reset"> </td>
        <td><input type = "submit" value = "submit"> </td>
       
</tr>
</table>
</form>
    </body>
</html>