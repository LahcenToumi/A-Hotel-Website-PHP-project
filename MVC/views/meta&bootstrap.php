<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?> </title>
    
  <link rel="icon" type="image/x-icon" href="../images/log.png" />
<!-- Simple line icons-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
       
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!--  styles -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <link href="../css/styles3.css" rel="stylesheet"/>
    <link href="../css/all.min.css" rel="stylesheet" type="text/css">
    
    <link href="../css/all.min.css" rel="stylesheet" type="text/css">
  
  <style>
      body{font-family: 'Kanit';font-size: 15px;}
    #size{
      font-size: 19.2px;
      font-family: Arial;
    }
    .cards {
      display: flex;
      flex-wrap: wrap;
      min-width: 100%;
      /* max-width: 820px; */
      min-height: 300px;
      justify-content: center;
    }
    

    .card {
      display: block;
      margin-top:10px ;
      margin-bottom:30px ;
      margin-right: 25px;
      background-color: #FFF;
      width: 40.3%;
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 
        0 13px 10px -7px #0000001A;
      transition: all .4s
        cubic-bezier(0.1, 0.8, 0, 1);
    }
    @media screen 
   and (max-width : 320px) 
   and (max-height : 534px) {
   /* Styles here */
   .card {
        min-width: 100%;

      }
      .cards{
        flex-direction: column;
        align-content: center;

      }
}
    @media screen and (max-width: 840px) {
      .card {
        width: 50%;

      }
      .cards{
        flex-direction: column;
        align-content: center;
      }
    }

    .img {
      height: 235px;

    }

    .img-hover {
      background-size: cover;
      min-width: 100%;
      background-position: center;
      height: 235px;
      position: absolute;
      top: 0;
      transition: 0.5s all ease-out;
    }



    .info {
      z-index: 2;
      padding: 16px 24px 24px 24px;
      
    }

    .category {
      font-family: sans-serif;
      text-transform: uppercase;
      font-size: 13px;
      letter-spacing: 2px;
      color: #868686;
    }

    .title {
      margin-top: 5px;
      margin-bottom: 10px;
    }

    .by {
      font-size: 13px;
      font-family: sans-serif;
    }

    .author {
      font-weight: 600;
      text-decoration: none;
      color: #AD7D52;
    }

    .card:hover {
      box-shadow: 
        0 30px 18px -8px #0000001A;
      transform: scale(1.10);
    }

    .card:hover .img-hover {
      height: 100%;
      opacity: 0.3;
    }

    .info-hover {
      position: absolute;
      padding: 16px;
      width: 100%;
      color: #AD7D52;
    }

    .clock-info {
      float: right;
      margin-top: -5px;
    }

    .info-hover ion-icon:nth-child(3) {
      float: right;
      margin-right: 5px;
    }

    .clock-info span {
      font-size: 12px;
    }
  </style>
        <link href="../css/styles3.css" rel="stylesheet"/>
        <script>
     


  </script>
</head>