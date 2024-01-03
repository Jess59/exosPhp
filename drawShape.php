<?php
	class Shape {
		public function draw() {
			echo "Drawing a shape (On utilise la class Shape et methode draw qui est le parent de Circle et Square)<br>";
		}
	}

	class Circle extends Shape {
		public function draw() {
			echo "Drawing a circle (On utilise la class Circle qui herite de Shape la méthode draw)<br>";
		}
	}

	class Square extends Shape {
		public function draw() {
			echo "Drawing a square (On utilise la class Square qui herite de Shape la méthode draw)<br>";
		}
	}
    function drawShape(shape $shape){
        $shape->draw();
    }

    $shape = new Shape();
    $shape->draw();

    $circle = new Circle();
    $square = new Square();

    drawShape($circle);
    drawshape($square);
    drawshape($shape);
    

	// Exemple d'utilisation
    /*$shape = new Shape();
    $shape->draw();  //Output: Drawing a shape (On utilise la class Shape et methode draw qui est le parent de Circle et Square)

	$circle = new Circle();
	$circle->draw();  // Output: Drawing a circle (On utilise la class Circle qui herite de Shape la méthode draw)

	$square = new Square();
	$square->draw();  // Drawing a square (On utilise la class Square qui herite de Shape la méthode draw)*/
    
    
?>
