    <?php include('include/header.php');?>
    
    <div class="pic"> 
        <div class="text-center">
        <img src="table1.jpg" class="rounded-pill" alt="Table" height="300px" width="auto" style="margin-top: 50px;">        
        </div>
    </div>
<center>
    <div class= table>
        <table>
            <tr><th>Country</th><th>Capital</th></tr>
            <?php
                $table = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

                foreach($table as $x => $x_value) {

                    echo "<tr><td>" . $x . "</td><td>". $x_value. "</td></tr>";
                }
            ?>
        </table>
    </div>
</center>
    <?php include('include/footer.php');?> 