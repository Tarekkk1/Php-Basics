<?php

interface Shape{
public function getArea();
}


class Rectangle implements Shape{
private $length;
private $width;
public function __construct($length,$width){
$this->length=$length;
$this->width=$width;


}
public function getArea()
{
    return $this->length*$this->width;
}


}

class Circle implements Shape{
    private $r;
    public function __construct($r)
{
    $this->r=$r;
}
public function getArea() {
    return M_PI * pow($this->r, 2);
}

}


class Triangle implements Shape{
    private $base;
    private $height;
    public function __construct($base,$height)
{
    $this->base=$base;
    $this->height=$height;}
public function getArea() {
    return 0.5 * $this->base * $this->height;
}
}


echo "Welcome to Tarek Area Calc";
echo "<br>";

echo "Choose 1 for Rectange"; 
echo "<br>";

echo "Choose 2 for Circle ";
echo "<br>";

echo "Choose 3 for Triangle ";
echo "<br>";


switch ($choiced){
    case (1):

    
            echo "Please enter the length of the  rectange .";
            $length=readline();
            echo "Please enter the width of the  rectange .";
            $width=readline();
            $rectange=new Rectangle($length,$width);
            echo "The area of the rectange is ".$rectange->getArea();

            
        
  
    case (2):
            echo "Please enter the radius of the  circle .";
            $r=readline();
            $circle=new Circle($r);
            echo "The area of the circle is ".$circle->getArea();
            
    
    break;

    case (3):
            echo "Please enter the base of the  triangle .";
            $base=readline();
            echo "Please enter the height of the  triangle .";
            $height=readline();
            $triangle=new Triangle($base,$height);
            echo "The area of the triangle is ".$triangle->getArea();
            break;
   default:
    echo "Invalid Choice";
   
}