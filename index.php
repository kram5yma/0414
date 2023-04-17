 <?php
 $score=64;
 
 
    if($score >= 90){
        $level="A";
    }else if($score >= 80){
        $level="B";
    }else if($score >= 70){
        $levle="C";
    }else if($score >= 60){
        $level="D";
    }else{
        echo "成績=".$score;
        echo "<br>";
        echo "請再接再厲~~";
        $level="E";
    }

echo "成績=".$score;
echo "<br>";
echo "請再接再厲~~";
// if($score>60){
// echo "成績".$score;
// echo "<br>";
// echo "恭喜及格";
// }else{
// echo "成績".$score;
// echo "<br>";
// echo "再接再厲";
// }

echo "<hr>";



switch($level){
    case "A":
        echo "表現優良，請繼續保持";
    break;
    case "B":
        echo "值得肯定，還有進步空間";
    break;
    case "C":
        echo "需要更多的練習";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    default:
        echo "是否無心學業?";

}
  echo"<hr>";

