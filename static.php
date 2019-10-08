<?php 
class contohStatic{
	public static $angka =1;

	public static function halo(){
		return "halo.". self::$angka++;
	}
}

echo contohStatic::$angka;
echo "<br>";
echo contohStatic::halo();
echo "<br>";
echo contohStatic::halo();
echo "<br>";
echo contohStatic::halo();

 ?>