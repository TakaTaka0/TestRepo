<?php
//AnotherBranch
    while($input = trim(fgets(STDIN))){
        $getNum[]= $input;
               
 }  
    unset($getNum[0]);
    $uniNum = array_unique($getNum);
    sort($uniNum);
                                        
                                             
                                             
    foreach($uniNum as $key=>$sortNum){
        echo $sortNum."\n";
 }

?>
