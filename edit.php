<?php
// Display selected user data based on id
// Getting id from url
include "conn.php";
$id = $_GET['id'];

$sql = "SELECT mahasiswa.ID, mahasiswa.nama AS Nama, nim,jenis_kelamin, dosen_wali.nama AS nama_dosen FROM mahasiswa INNER JOIN dosen_wali ON mahasiswa.id_doswal = dosen_wali.id WHERE mahasiswa.ID = $id";
$result = $conn->query($sql);

while($user_data = $result->fetch_assoc())
{
    $id = $user_data['ID'];
    $nama = $user_data['Nama'];
    $nim = $user_data['nim'];
    $jk = $user_data['jenis_kelamin'];
    $doswal = $user_data['nama_dosen'];
}

    $male_status = 'unchecked';
    $female_status = 'unchecked';    
    if ($jk == 'L') {

        $male_status = 'checked';

    }
    else if ($jk == 'P') {

        $female_status = 'checked';

    }
    $conn->close();  
?>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

    <style>
       body{
                padding: 0;
                margin: 0;
                background-color: rgba(0,0,0,0.1);
                background-image: url("college.jpg");
                font-family: 'Roboto Slab', sans-serif;
                -webkit-background-size: cover;
                background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
        }

        .content{
                width:1000px;
                padding: 30px;
                position: relative;
                left: 60px;
                height: 450px;
                background-color: rgb(246, 246, 246, 0.9);
                box-shadow: 2px 2px 5px black;
            }

            .btn-primary{
                padding: 8px 18px;
                position: relative;
                left: 50;
                top: 20px;
                text-align: center;
            }

        .main{
            padding: 100px;
        }

        
        .form{
            padding: 2px 5px;
        }

        .home{
            padding: 2px 5px;
        }

             .snt{
            text-align: center;
        }          
    </style>

    <title>Sunting</title>
</head>
<body>
<div class="main">
<div class="content">
<a href="index.php">Home</a>
<div class="snt">
<h2> <b> SUNTING DATA MAHASISWA </b> </h2>
</div>
        <form action="update.php" method="post">
            <div class="form">
                <label class="col-sm-2 col-form-label"><b>Nama</b></label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="Nama" value="<?php echo $nama;?>">                    
                </div>
            </div>
            <div class="form">
                <label class="col-sm-2 col-form-label"><b>NIM</b></label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="Nim" <?php echo "value=", $nim;?>>
                </div>
            </div>
            <div class="form">
                <label class="col-sm-2 col-form-label"><b>Jenis kelamin</b></label>
                <div class="form-check form-check-inline">                        
                    <input class="form-check-input" type="radio" name="Jk" id="inlineRadio1" value="1" <?php echo $male_status;?>>
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Jk" id="inlineRadio2" value="2" <?php echo $female_status;?>>
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
            </div>   
            <div class="form">
                <label class="col-sm-2 col-form-label"><b>Dosen Wali</b></label>
                <select class="custom-select custom-select-lg col-md-6" name="select">
                    <option>Pilih Dosen</option> 
                    <?php
                        include "conn.php";        
                        $sql = "SELECT nama FROM dosen_wali";
                        $result = $conn->query($sql);       
                        if ($result->num_rows > 0){
                            // output data of each row
                                while($row = $result->fetch_assoc()) { 
                                    if($row["nama"]==$doswal) {
                                         echo '<option selected>', $row['nama'],'</option>';                                        
                                    }
                                    else{
                                        echo '<option>', $row["nama"],'</option>';                                        
                                    }
                                }
                            }            
                            $conn->close();  ?>                                          
                </select>
            </div>
            <div class="form">  
                <input type="hidden" class="form-control" name="myID" <?php echo "value=", $id;?>>                      
                <input type="submit" name="Edit" class="btn btn-primary" value="Sunting"></input>
            </div>
        </form>
    </div>   
</body>
</html>