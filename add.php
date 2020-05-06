<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">

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

        .submit{
           padding: 2px 10px;
        }

        #header {
            text-align: center;
            color: white
        }

        .content{
            width:1000px;
           padding: 30px;
           position: relative;
           left: 70px;
            height: 450px;
            background-color: rgb(246, 246, 246, 0.95);
            box-shadow: 2px 2px 5px black;
        }

        .tmb{
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
    </style>

    <title>Tambah</title>
</head>
<body>
<div class="main">
    <div class="content">
        <div class="home">
            <a href="index.php">Home</a>
        </div>
    <div class="tmb">
        <h2> <b> TAMBAHKAN MAHASISWA </b> </h2>
    </div>
        <form action="insert.php" method="get">
            <div class="form">
                <label class="col-sm-2 col-form-label"><b>Nama</b></label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="Nama">
                </div>
            </div>
            <div class="form">
                <label class="col-sm-2 col-form-label"><b>NIM</b></label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="Nim">
                </div>
            </div>
            <div class="form">
                <label class="col-sm-2 col-form-label"><b>Jenis kelamin</b></label>
                <div class="form-check form-check-inline">                        
                    <input class="form-check-input" type="radio" name="Jk" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Jk" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
            </div>   
            <div class="form">
                <label class="col-sm-2 col-form-label"><b>Dosen Wali</b></label>
                <select class="custom-select custom-select-lg col-md-6" name="select">
                    <option selected>Pilih Dosen</option> 
                    <?php include "dosen.php";?>                                         
                </select>
            </div>
            <div class="submit">                        
                <input type="submit" name="Submit" class="btn btn-primary" value="Tambahkan"></input>
            </div>
        </form>
    </div>
    </div>   
</body>
</html>