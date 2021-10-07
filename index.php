<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC</title>
</head>
<body>
  <?php 
  $computer = array( 
  'Procesor' => "Intel Core i7",
  'Graficka_Karta' => "NVIDIA GEFORCE RTX",
  'RAM' => "16GB RAM Corsair Dominator Platinum RGB",
  'SSD' => "SSD Kingston KC2500 1000GB",
  'Bedna' => "Tempered Glass ATX Mid Tower Computer Case",
  'Klavesnice' => "Drop ENTR Mechanical Keyboard",
  'Myš' => "HP Wireless Mouse X3000 G2 (28Y30AA, Black)",
  'Sluchátka' => "TSh-4 (Funkční Sovietská tanková helma)",
  'monitor' => '27 ASUS VG279Q',
  'zakladni_deska' => "Gigabyte GA-F2A58M-DS2 Motherboard",
  'vetrak' => "Noctua NF-P12 redux-1700 PWM",
  );
  ?>
  <h1>PC setup</h1>
<ul>
    <li><?php echo $computer['Procesor']?></li>
    <li><?php echo $computer['Graficka_Karta']?></li>
    <li><?php echo $computer['RAM']?></li>
    <li><?php echo $computer['SSD']?></li>
    <li><?php echo $computer['Bedna']?></li>
    <li><?php echo $computer['Klavesnice']?></li>
    <li><?php echo $computer['Myš']?></li>
    <li><?php echo $computer['Sluchátka']?></li>
    <li><?php echo $computer['monitor']?></li>
    <li><?php echo $computer['zakladni_deska']?></li>
    <li><?php echo $computer['vetrak']?></li>
</body>
</html>
