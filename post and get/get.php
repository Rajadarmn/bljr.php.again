<?php
//super global
//array nemerik
// $_GET & $_GET
//method get adalh pengirim data melalui url yang ditampung oleh variable $_GET



$makanandikantin=[
    ["jenis-makanan"=>"makanan-ringan",
    "nama"=>"chitato",
    "sehat"=>"tidak"
],
    ["jenis-makanan" => "makanan-berat",
    "nama" => "roti",
    "sehat" => "iya"
    ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data makanan di kantin</h1>

    <ul>
        <?php foreach($makanandikantin as $a){?>
           <li><a href="resultget.php?jenis-makanan=<?php echo $a["jenis-makanan"] ?> &nama= <?php echo $a["nama"] ?> &sehat= <?php echo $a["sehat"]?>"><?php echo $a["jenis-makanan"]?></a></li>
           <!-- <li><?php echo $a["nama"]?></li>
           <li><?php echo $a["sehat"]?></li> -->
        <?php }?>
    </ul>
   
</body>
</html>