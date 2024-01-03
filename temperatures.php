<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    class TemperatureSensor {
        private $temperature = 0;

        public function __construct() {

        }

        public function setTemperature ($value) {
            if ($value < -273.15) {
                echo "Invalid temperature value";
            } else {
                $this -> temperature = $value;
            }
        }
    public function  getTemperature() {
            return $this -> temperature;
    }
    }
    //Exemple d'utilisation 
    $sensor  = new TemperatureSensor();
    $sensor -> setTemperature(30);
    echo $sensor -> gettemperature();
    ?>

</body>

</html>