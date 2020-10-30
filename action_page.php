<?php include('include/header.php');?>
    <div class="pic"> 
        <div class="text-center">
        <img src="form.jpg" class="rounded-pill" alt="Table" height="300px" width="auto" style="margin-top: 50px;">        
        </div>
    </div>

    <div class="space"></div>

    <div class="container">
        <?php
            $table = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
        ?>

        <?php 
            $userselect = $_POST["country"];
            if(array_key_exists ($userselect,$table)){
            echo 'The capital of ' . $userselect . ' is ' . $table[$_POST["country"]];
            }

            else{
                echo "Other country was not listed.";
            }
        ?>
    </div>

    <div class="space"></div>
    
<?php include('include/footer.php');?> 
