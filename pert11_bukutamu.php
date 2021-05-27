<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Buku Tamu</title>
</head>

<body>

    <body>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Assistant:wght@300&display=swap');

            body {
                font-family: 'Assistant', sans-serif;
            }

            .title {
                margin-top: 40px;
                font-family: 'Roboto', sans-serif;
                margin-bottom: 40px;
            }

            .titleGuest {
                margin-top: 80px;
                font-family: 'Roboto', sans-serif;
            }

            .leadGuest {
                font-family: 'Assistant', sans-serif;
                margin-bottom: 40px;
            }

            .card {
                padding: 40px;
                background-color: #2980b9;
                border: none;
            }

            .formGuest {
                margin-bottom: 40px;
            }
        </style>
        <section class="guestBook">
            <h2 class="title text-center">Guest Book</h2>
            <div class="container">
                <div class="row formGuest">
                    <div class="col-lg-5">
                        <h2 class="titleGuest">Have Any Project ?</h2>
                        <p class="leadGuest">
                            We are happy if you are interested in our project. <br>
                            You can fill the form now. <br>
                            <b>Thank You</b>
                        </p>
                    </div>
                    <div class="col-lg-7">
                        <div class="card">
                            <form action="pert11_simpanBukuTamu.php" method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap Anda" name="nama_lengkap" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="name@example.com" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pesan</label>
                                    <textarea class="form-control" rows="5" required placeholder="Ketikan pesan anda" name="pesan"></textarea>
                                </div>
                                <input type="submit" value="Simpan" />
                            </form>
                        </div>
                    </div>
                </div>
                <?php
                    include("pert11_koneksiBukuTamu.php");
                    $query = mysqli_query($koneksi, 'select * from data_tamu');
                    while ($data = mysqli_fetch_array($query)) {
                        $nama = $data['nama_lengkap'];
                        $email = $data['email'];                        
                        $pesan = $data['pesan'];
                        echo "   
                        <b>$nama</b><br/>
                        <i class='ganti'>'$pesan'</i> <br/>                        
                        <a class='kecil' title='Kirim Email' href='mailto:$email'>[Email]</a> <br/><br/>
                        ";
                    }
                ?>
            </div>
        </section>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>

</html>