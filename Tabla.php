<htm>
    <head>
        
          
          
            <?php
            echo '<table style="width:70%" border="1">';
           
            echo "<tr>";
            echo "<td>Grados</td>";
            echo "<td>Seno</td>";
            echo " <td>Coseno</td>";
            echo " <td>Tangente</td>";
             echo "</tr>";
            
            
             for($i=30; $i<=360; $i+=10){
            
            echo "<tr>";
             echo "<td>".$i." </td>";
            echo "<td>".sin(deg2rad($i))." </td>";
            echo " <td>".cos(deg2rad($i))."</td>";
            echo "<td>".tan(deg2rad($i))."</td>";
             echo "</tr>";
            
                
           
            
                 }
            ?>
            
            
            
        </table>
            
        
      
       
       
       
        
    </head>

    
</htm>


