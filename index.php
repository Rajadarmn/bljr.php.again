<?php
//penambahan
// $a=1;
// $b=2;
// echo $a + $b;

// pengurangan
// $c=5;
// $d=4;
// echo $c - $d;

//perkalian
// $e=5;
// $f=2;
// echo $e * $f;

//pembagian
// $g=4;
// $h=1;
// echo $g / $h;

//penugasan 
// $i=10;
// $j+=$i;
// echo $j;

//perbandingan
// $k = 1;
// $l ="1";
// var_dump($k == $l);
// echo $k ==$l;

// $a =5;
// $b =3;
// var_dump($a!=$b);

// $a =10;
// $b =10;
// var_dump($a<>$b)

// $a =5;
// $b ="5";
// var_dump($a !== $b);

// $a = 5;
// $b = 3;
// var_dump($a <= $b);

// $a =10;
// $b =5;
// var_dump($a >= $b);

//logika
//1
// var_dump(25+5==30 && 15+5==20);
//2
// var_dump(2+2==4 || 3+3==6);
//3
// var_dump(!1+1==1);
//4
// var_dump(1+1==2 xor 1+2==1);


// $a = 5;
// $b =++$a;
// var_dump($a);
// var_dump($b);

// $a = 7;
// $b = $a++;
// var_dump($a);
// var_dump($b);

// $a = 1;
// $b = --$a;
// var_dump($a);
// var_dump($b);

// $a = 1;
// $b = $a--;
// var_dump($a);
// var_dump($b);
//$a=["raja","haidar","rifky","bagas"];
// $a[]="atar";
// var_dump($a);

// $a=["raja","haidar","rifky","bagas"];
// unset($a[0]);
// var_dump($a);

// $a=["raja","haidar","rifky","bagas"];
// count($a);
// var_dump($a);



// $siswa = [
//     "nama-siswa" => "raja",
//     "umur" => 16,
//     "asal" => "sulawesi",
// ];

//echo($siswa["nama"]);
    

// $gua = array(
//     "id" => "1",
//     "nama" => "ra_drmns01",
//     "address" => array(
//     "city" => "jakut",
//     "country" => "Indonesia"
//     )
//     );
//     //mencetak array didalam array
//     var_dump($gua["address"]["city"]);

// $a=[["raja","haidar","rifky","bagas"],["zikri","faiz","darda"],["kinan"]];
// var_dump($a[2][0]);


// $name="raja";
// $umur=16;
// echo "Nama : . $name . $umur";

// $valueString = (string)1000;
// var_dump($valueString);
// $valueInt = (int)"raja";
// var_dump($valueInt);
// $valueFloat = (float)"1000";
// var_dump($valueFloat);

// $name="raja";
// echo $name[0];
// echo $name[1];
// echo $name[2];
// echo $name[3];

// $name = "raja";
// $teman = "darda";
// $kwan = "faiz";
// echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL;
// echo "Hello $teman, Selamat Belajar PHP" . PHP_EOL;
// echo "Hello $kwan, Selamat Belajar PHP" . PHP_EOL;


// $name = "king";
// echo "This is {$name}s";


// $pet="dadan";
// echo "dia {$pet} di jual murah";


// $tinggi = 168;
// $berat = 46;
// if ($tinggi >= 80 && $berat >= 20) {
// echo "Anda lulus";
// } else {
// echo "Anda Tidak lulus" ;
// }


// $umur = 16;
// $ktp = 17;
// //if else if else
// if ($umur >= 10 && $ktp >= 5) {
// echo "umur cukup" ;
// } elseif ($umur >= 4 && $ktp >= 7) {
// echo "sama masih blom cukup" ;
// } else {
// echo "umur blom cukup" ;
// }


// $nilai=80;
// $absen=75;
// if ($nilai >= 80 && $absen >= 80) :
//     echo "Nilai Anda A" . PHP_EOL;
//     elseif ($nilai >= 70 && $absen >= 70):
//     echo "Nilai Anda B" . PHP_EOL;
//     elseif ($nilai >= 60 && $absen >= 60):
//     echo "Nilai Anda C" . PHP_EOL;
//     elseif ($nilai >= 50 && $absen >= 50):
//     echo "Nilai Anda D" . PHP_EOL;
//     else :
//     echo "Nilai Anda E" . PHP_EOL;
//     endif;
    

// $gua="raja";
// switch ($gua) {
//     case "a":
//     echo"anda orang baik";
//     break;
//     case "sama":
//     echo "Anda bego";   
//     case "raja":
//     echo "Anda lulus";
//     break;
//     case "bukan":
//     echo "Anda tidak lulus";
//     break;
//     default:
//     echo "Mungkin Anda kurng teliti";
//     }
        
// $gender = "PRIA";
// $hi = null;
// if ($gender == "PRIA") {
// $hi = "Hi Bro!";
// } else {
// $hi = "Hi Sis!";
// }
// echo $hi;



// $musang = "hijri";
// $sigung = $musang == "zipo" ? "dadan!" : "blok!";
// echo $musang;


// $nama="adi";
// unset($nama);
// if(isset($nama)){//ISST MENGECEK NILAI
//     echo $nama;
// }else{
//     echo "kosong";
// }


// $nama="jun";
// echo $nama ?? "kosong";


// $data = [];
// if (isset($data['action'])) {
// $action = $data['action'];
// } else {
// $action = 'nothing';
// }
// echo $action;


//menggunakan null coalescing operator
// $data = [
//     "action" => "Create"
//     ];
//     $action = $data["action"] ?? "Nothing";
//     echo $action;


//loop
// for(;;){
//     echo "i love kitsunee";
// }

// for($i=0;$i <= 5;){
//     echo "my kitsunee";
// }


// for ($counter = 10; $counter <= 1; $counter--) {
//     echo "Ini adalah for loop ke-$counter" . PHP_EOL;
//     }


    // for ($counter = 1; $counter <= 5; $counter++):
    //     echo "Ini adalah for loop ke-$counter" . PHP_EOL;
    //     endfor;
    //     for ($counter = 5; $counter >= 1; $counter--):
    //     echo "Ini adalah for loop ke-$counter" . PHP_EOL;
    //     endfor;
    
    

// $counter = 1;
// while ($counter <= 10) {
// echo "Ini adalah while loop ke-". $counter . PHP_EOL;
// $counter++;
// }

// $hewan = 1;
// while ($hewan <= 10) :
// echo "Ini adalah while loop ke-". $hewan ;
// $hewan++;
// endwhile;



// $counter = 1;
// do {
// echo "Ini adalah do while ke-$counter" . PHP_EOL;
// $counter++;
// } while ($counter <= 10);


// $counter = 100;
// do {
// echo "Ini adalah do while ke-$counter" . PHP_EOL;
// $counter++;
// } while ($counter <= 10);



// $counter = 1;
// while (true) {
// echo "Ini adalah for while ke-$counter" . PHP_EOL;
// $counter++;
// if ($counter > 10) {
// break;
// }
// }




// for ($counter = 1; $counter <= 100; $counter++) {
//     if ($counter % 2 == 0) {
//     continue;
//     }
//     echo "Counter : $counter" . PHP_EOL;
//     }



///array nuerik
// $names = ["andik", "siroj", "adelio"];
// var_dump($names[2]);

//array asiatif
// $nama = ["dkv"=>"andi","tkj"=>"siroj","rpl"=>"adelio"];
// var_dump($nama["tkj"]);
   
//loop
// for($i = 0; $i < count($names); $i++) {
//     echo $names[$names];
// }


// foreach($nama as $a){
//     echo "hewan ku $a";
// }

// $names = ["Elina", "Hasna", "Zahra"];
// for ($i = 0; $i < count($names); $i++) {
// echo "Data ke $i = $names[$i]" . PHP_EOL;
// }


// $waifuku = ["kitsunee", "roselew1s", "neko" , "raja"];
// for ($i = 0; $i < count($waifuku); $i++) {
// echo "waifu ke $i = $waifuku[$i]" . PHP_EOL;
// }


// foreach($nama as $key => $dia){
//     echo "hewan ku $dia";
// }



//membuat function
// function adelio()
// {
// echo "adelio" ;
// }
// //mencetak function
// adelio();
// adelio();
// adelio();


// //membuat function argument
// function orang($waifuku , $jenis_kelamin)
// {
// echo "orang $waifuku : $jenis_kelamin" ;
// }
// orang("kitsunee","ceweku"). PHP_EOL;


// function sum(int $first, int $last)
// {
// $total = $first + $last;
// echo "Total $first + $last = $total" . PHP_EOL;
// }
// sum(10, 10);
// sum("1000", "1000");
// sum(true, false);

// function sum(int $first, int $second): int
// {
// $total = $first + $second;
// return $total;
// }
// $result = sum(10, 10);
// var_dump($result);
// $result = sum(100, 100);
// var_dump($result);


// function angka($a = 0, $b = 0){
//     $result = $a + $b;
//     return $result;
// }
//     echo angka(1,2);
//     echo angka(100,0);


// function ra(){
//     echo "ra";
// }
// function oi(){
//     echo "oi";
// }

// $functionYangAkanDipanggil = "ra";
// $functionYangAkanDipanggil();
// $functionYangAkanDipanggil = "oi";
// $functionYangAkanDipanggil();




// //date()
// //untuk menampilkan tanggal dengan format tertentu
// date_default_timezone_set("Asia/jakarta") . PHP_EOL;
// //untuk menampilkan waktu (hari, tanggal bulan tahun)
// echo date("D, d m y") . PHP_EOL;
// echo date("H:i:s") . PHP_EOL;
// //detik
// //detik yg sudah berlalu sejak 1 januari 1970
// echo time();
// //menghitung 1000 hari kedepan

// echo date("l, d M Y", time()+60*60*24*1000) . PHP_EOL;
// //strtotime
// //string to time
// date_default_timezone_set("Asia/jakarta") . PHP_EOL;
// echo date("l", strtotime("24 aug 2002")) . PHP_EOL;


// //function bult in
// date_default_timezone_set("Asia/makassar");
// echo date("F j, Y, g :i a");

// // echo date("i, d-m-y",time()+60*60*24*2);

// //strtotime
// echo date("l",strtotime("05 agus 2007"));

// require and include
$a="si item";
echo $a;



// function hello()
// {
//     echo "hewanku";
// }
//     hello();

function hellotod(){
    $a= "restu";//local
    echo $a;
}
   hellotod();
   echo $a;


?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
    <?php 
        for($i = 0;$i <=10;$i++){ ?>
          <?php 
        if($i % 2 == 0 ){?>
            <li><?php echo "hewan ke $i pintar"?></li>
        <?php }elseif($i == 3){?>
            <li> <?php echo " hewan ke $i tolol " ?> </li>  
        <?php }else{?>  
        <li><?php echo "hewan ke $i kureng "?></li>
        <?php } ?> 
        <?php } ?> 
          
    </ul>

    <?php
    $hewan = 1;
for (; $hewan <= 10;) {
echo "Ini adalah hewanku ke-$hewan" ;
$hewan++;
}

?>

<?php

?>  -->

</body>
</html>
