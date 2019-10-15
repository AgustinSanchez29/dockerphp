<?php
if(isset($_POST['btn_ok'])){

    $n = $_POST['tam'];

    if(!($n % 3 ==0)){
        //fuera
        echo 'fuera porque '.$n .'/3 no tiene division exacta ';
    }else{
        //dentro
    
        echo $n.'/3= '.($n/3);
        echo '<form action="lab45.php" method="POST">';
     
        for($i=0;$i<$n*2;$i++){
            echo '  <input type="number" name="tam'.$i.'" required><br>';
       
        }
        echo '<input type="submit" value="ok" name="btn_ok2">';
        echo '<input type="hidden" name="tam" value="'.$n.'" />';
        echo '</form>';
        
     }

}elseif(isset($_POST['btn_ok2'])){

    $arr = array();

    $n = $_POST['tam'];

    for($i=0;$i<$n*2;$i=$i+2){
        
        array_push($arr,$_POST['tam'.$i]);
        array_push($arr,$_POST['tam'.($i+1)]);
        array_push($arr,($_POST['tam'.($i+1)] + $_POST['tam'.($i)]));

    }

    print_r($arr);

}


 


 