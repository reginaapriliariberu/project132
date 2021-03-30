<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Detail</title>
    <link rel="icon" href="img/saya2.jpg">


  <title>Resume</title>
  <style>
    @media screen and (max-width: 1080px) {

      .container {
        width: 100%;
      }

      .left {
        width: 25%;
        background-color: #89d0ff;
      }

      .middle {
        width: 68%;
        float: right;
      }

      .right {
        clear: both;
        padding: 1% 4%;
        width: auto;
        float: none;
      }
    }

    @media screen and (max-width: 780px) {

      .header,
      .footer {
        text-align: center;
      }

      .left {
        width: auto;
        float: none;
      }

      .middle {
        width: auto;
        float: none;
      }

      .right {
        width: auto;
        float: none;
      }

    }

    .resume-skill ul li {
      justify-content: space-between;
      color: #c94f7c;
    }

    .resume-skill ul .skill-progress {

      width: 60%;
      margin: 0 10px;
      height: 5px;
      background: #444647;
      position: relative;


    }

    .resume-skill ul .skill-per {
      width: 15%;
      color: #c94f7c;
    }

    .resume-skill ul .skill-progress span {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      background: #fff;
      justify-content: space-between;
    }

    .resume_right {
      width: 600px;
      background: #fff;
      padding: 25px;
    }

    .resume_right .bold {
      color: #0bb5f4;
    }

    .resume_right .resume_work ul .resume_right .resume_education ul {
      padding-left: 40px;
      overflow: hidden;
    }

    .resume_right ul li {
      position: relative;
    }

    .resume_right ul li .date {
      font-size: 16px;
      font-weight: 500;
      margin-bottom: 15px;
    }

    .resume_right ul li .info {
      margin-bottom: 20px;
    }

    .bold {
      font-weight: 700;
      font-size: 20px;
      text-transform: uppercase;
    }

    .semi-bold {
      font-weight: 500;
      font-size: 16px;
    }

    .resume_right ul li:last-child .info {
      margin-bottom: 0;
    }

    .resume_right .resume_work ul li:before {
      content: '';
      position: absolute;
      top: 5px;
      left: -50px;
      width: 6px;
      height: 6px;
      border-radius: 50%;
      border: 5px solid #0bb5f4;
      margin-top: 3px;
    }

    .resume_right .resume_education ul li:before {
      content: '';
      position: absolute;
      top: 5px;
      left: -50px;
      width: 6px;
      height: 6px;
      border-radius: 50%;
      border: 5px solid #0bb5f4;
      margin-top: 3px;
    }

    .resume_right .resume_work ul li:after {
      content: "";
      position: absolute;
      top: 14px;
      left: -46px;
      width: 2px;
      height: 110px;
      background: #0bb5f4;
    }

    .resume_right .resume_education ul li::after {
      content: '';
      position: absolute;
      top: 14px;
      left: -46px;
      width: 2px;
      height: 90px;
      background: #0bb5f4;

    }

   
  </style>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light shadow  " style="background-color: #c94f7c;">
        <div class="container  ">
          <a class="navbar-brand text-white" href="#">Regina Aprilia</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-link active text-white " href="halaman" >Home <span class="sr-only"></span></a>
              <a class="nav-link active text-white" href="resume">About</a>
    
            </div>
          </div>
        </div>
      </nav>
      <div class="jumbotron jumbotron-fluid" style="background-color: #c94f7c;">
      </div>
      <div class="container" style="margin-top: 100px;">
        <div class="card " style="background-color: #E0F2F1; width: fit-content;">
          <div class="card-body">
            <div class="row">
    
              <div class="col-6">
                <h5 class="text-center" style="background-color:#81D4FA;">CURRICULUM VITAE</h5>
                <div class="data" style="background-color: #E0F2F1; margin-top: -8px;">
                  <img src="img/sy.jpg" class="rounded-circle text-center"
                    style="width: 50%; display: block; margin: auto;">
    
                  <h4 class="text-center"><strong>Regina Aprilia Riberu </strong></h4>
                  <p class="text-center">
                    Contact <br>
                    (+62)813 377 402 84 <br>
                    reginaaprilia2000@gmail.com <br>
                    Jalan.Biola Kos Putri Punia No.VB <br>
                    Punia Mataram 83127
    
                  </p>
                </div>
                <div class="data" style="background-color: #4FC3F7; margin-top: -18px;"> <br> <br>
                  <img src="img/skill.JPG" class="text-center"
                    style="width: 5%; display: block; margin: auto; margin-bottom: 2px;">
                  <h5 class="text-center"><strong>KEMAMPUAN</strong></h5>
                  <div class="container">
                    <p>CSS 60%</p>
                    <div class="progress" style="height: 15px; background-color: #E0F2F1; margin-top: -10px;">
    
                      <div class="progress-bar text-left p-3  progress-bar-striped progress-bar-animated "
                        style="width:60%;background-color:#c94f7c;">
    
                      </div>
                    </div>
                    <p>Corel Draw 50%</p>
                    <div class="progress" style="height: 15px; background-color: #E0F2F1; margin-top: -10px;">
    
                      <div class="progress-bar text-left p-3  progress-bar-striped progress-bar-animated "
                        style="width:50%;background-color:#c94f7c;">
    
                      </div>
                    </div>
                    <p>Adobe Ilustrator 60%</p>
                    <div class="progress" style="height: 15px; background-color: #E0F2F1; margin-top: -10px;">
    
                      <div class="progress-bar text-left p-3  progress-bar-striped progress-bar-animated "
                        style="width:60%;background-color:#c94f7c;">
    
                      </div>
                    </div>
                    <p>Website 75%</p>
                    <div class="progress" style="height: 15px; background-color: #E0F2F1; margin-top: -10px;">
    
                      <div class="progress-bar text-left p-3  progress-bar-striped progress-bar-animated "
                        style="width:75%;background-color:#c94f7c;">
    
                      </div>
                    </div>
                    <p>Bahasa Inggris 65%</p>
                    <div class="progress" style="height: 15px; background-color: #E0F2F1; margin-top: -10px;">
    
                      <div class="progress-bar text-left p-3  progress-bar-striped progress-bar-animated "
                        style="width:65%;background-color:#c94f7c;">
    
                      </div>
    
                    </div>
                    <p>Bahasa Indonesia 98%</p>
                    <div class="progress" style="height: 15px; background-color: #E0F2F1; margin-top: -10px;">
    
                      <div class="progress-bar text-left p-3  progress-bar-striped progress-bar-animated "
                        style="width:98%;background-color:#c94f7c;">
    
                      </div>
                    </div>
                    <br>
                    <br>
                    <br>
    
                  </div>
                </div>
                <div class="hobby" style="background-color: #00BCD4; margin-top: -75px;">
                  <h4 class="text-center" style="margin-top: 60px;"><strong>HOBBY</strong></h4>
    
                  <table>
                    <tbody>
                      <tr>
                        <td><img src="img/music.JPG" style="width: 25%; display: block; margin: auto; margin-bottom: 2px;">
                        </td>
                        <td> <img src="img/makeup.JPG" class="text-center"
                            style="width: 25%; display: block; margin: auto;  margin-bottom: 2px;"></td>
                        <td> <img src="img/read.JPG" class="text-center"
                            style="width: 25%; display: block; margin: auto; margin-bottom: 2px;"></td>
    
                        </td>
                      </tr>
                      <tr style="text-align: center;">
                        <td>Musikan</td>
                        <td>Make Up</td>
                        <td>Membaca</td>
    
    
                      </tr>
    
                    </tbody>
    
                  </table>
                  <br>
    
                </div>
              </div>
              <div class="col-6">
                <div class="resume_right">
                  <div class="resume_item resume_about">
                    <div class="title">
                      <p class="bold">Informasi Pribadi</p>
                    </div>
                    <table>
                      <tbody>
    
                        <tr>
                          <td>Nama Lengkap</td>
                          <td>:</td>
                          <td>Regina Aprilia Riberu</td>
                        </tr>
                        <tr>
                          <td>Nama Panggilan</td>
                          <td>:</td>
                          <td>Lia</td>
                        </tr>
                        <tr>
    
                          <td>Tanggal Lahir</td>
                          <td>:</td>
                          <td>30 April 2000</td>
                        </tr>
                        <tr>
    
                          <td>Lahir di</td>
                          <td>:</td>
                          <td>Surabaya</td>
                        </tr>
                        <tr>
    
                          <td align="left" valign="top"> Alamat </td>
                          <td align="left" valign="top">:</td>
                          <td align="left" valign="top" width="200px" colspan="2">Cakranegara Kompleks Akasia Jalan Akasia
                            II
                            Mataram Nusa Tenggara
                            Barat
                          </td>
                        </tr>
                        <tr></tr>
                        <tr>
    
                          <td>Agama</td>
                          <td>:</td>
                          <td>Kristen Katolik</td>
                        </tr>
                        <tr>
    
                          <td>Pekerjaan</td>
                          <td>:</td>
                          <td>Mahasiswi</td>
                        </tr>
                        <tr>
    
                          <td>Universitas</td>
                          <td>:</td>
                          <td>Bumigora</td>
                        </tr>
                        <tr>
    
                          <td>Jurusan</td>
                          <td>:</td>
                          <td>RPL</td>
                        </tr>
                        <tr>
                          <td>NIM</td>
                          <td>:</td>
                          <td>1810530132</td>
                        </tr>
                        <tr>
                          <td>Semester</td>
                          <td>:</td>
                          <td>5</td>
                        </tr>
                        <tr>
                          <td>E-mail</td>
                          <td>:</td>
                          <td>reginaaprilia2000@gmaill.com</td>
                        </tr>
                      </tbody>
                      </tr>
    
                      </tbody>
    
                    </table>
                  </div>
                  <div class="resume_item resume_work">
                    <div class="title"> <br>
                      <p class="bold">Penghargaan</p>
                    </div>
                    <ul>
                      <li>
                        <div class="date">2018</div>
                        <div class="info" style="margin-top: -15px;">
                          <p class="semi-bold"></p><b>Juara 1 Lomba Pidato <br> Tingkat Kabupaten</b> <br>
                          Lomba Pidato dalam Rangka <br>Memperingati Hari Ulang Tahun <br> Perpustakaan.</p>
    
                        </div>
                      </li>
                      <li>
                        <div class="date">2018</div>
                        <div class="info " style="margin-top: -15px;">
                          <p class="semi-bold"></p><b>Juara Harapan 1 Lomba Pidato <br>Tingkat Provinsi</b> <br>
                          Lomba Pidato dalam Rangka <br>Memperingati Hari Ulang Tahun <br> Perpustakaan.</p>
    
                        </div>
                      </li>
                    </ul>
                  </div>
                  <br>
                  <div class="resume_item resume_education">
                    <div class="title">
                      <p class="bold">Education</p>
                    </div>
                    <ul>
                      <li>
                        <div class="date">2018</div>
                        <div class="info " style="margin-top: -15px;">
                          <p class="semi-bold"></p><b>SMK DON BOSCO SUMBA NTT</b> <br>
                          Lulus SMK Jurusan TKJ</p>
    
                        </div>
                      </li>
                      <li>
                        <div class="date">2015</div>
                        <div class="info " style="margin-top: -15px;">
                          <p class="semi-bold"></p><b>SMP Negeri 1 Loura Sumba NTT</b><br>
                          Lulus SMP Tahun Ajaran 2014/2015</p>
    
                        </div>
                      </li>
                      <li>
                        <div class="date">2012</div>
                        <div class="info " style="margin-top: -15px;">
                          <p class="semi-bold"></p><b>SDK Marsudirini Tambolaka Sumba NTT</b><br>
                          Lulus SD Tahun ajaran 2011/2012</p>
    
                        </div>
                      </li>
                    </ul>
                  </div>
    
                </div>
              </div>
    
            </div>
          </div>
        </div>
      </div>
     
      
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="js/bootstrap.bundle.js"></script>
</body>
</html>