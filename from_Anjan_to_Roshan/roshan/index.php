<?php
    require"include.php";
    $a=0;
    exec("./serial",$p,$a);
    echo $a;
    //print_r($p);
    show("header");
    $i=0;
    $status = array('0' =>"green",'1' => "red" );
    $point=0;
    echo "<div class=\"row upper-road\">";
    while($i<4){
        if($i<(4-$a))   
            $point=1;
        echo "<div class=\"col-2 $status[$point]\"></div>";
        $i++;
        $point=0;
    }
    echo "</div>
            <!--road-->
                <div class=\"road\">
                    <div class=\"row\">";
    $i=0;
    while($i<=4){
            echo "<div class=\"small-block\">
            </div>";
        $i++;
    }
    echo "<div class=\"dark text-center\">
    <hr class=\"light\"> 
    <div class=\"foot\">
        <p class=\"leader\">Designed by Anjan Poudel.</p>
        </div>
      </div>
    </div>
</div>
<div class=\"row upper-road\">";
    $i=0;
    while($i<4){
        if($i<(4-$a))   
            $point=1;
        echo "<div class=\"col-2 $status[$point]\"></div>";
        $i++;
        $point=0;
    }
    echo "</div>";
    show("footer");
?>