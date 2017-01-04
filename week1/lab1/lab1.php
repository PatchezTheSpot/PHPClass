<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
       
        <!-- Creating table -->
        <table border="1">
        <?php for($tr = 1; $tr <= 10; $tr++): ?> 
            <tr> 
                
            <?php for($td = 1; $td <= 10; $td++):?>
                
                <!-- Creating randColor genertor -->    
                <?php $randColor = '#'.strtoupper(dechex(rand(0x000000, 0xFFFFFF))); ?>
                
                <!-- Styling the box with a color -->
                <td style="background-color: <?php echo $randColor; ?>"> 
                    
                <!-- Inputting Data to blocks -->  
                <?php if (isset($randColor)): ?>
                    <p style="color:white"> <?php echo $randColor; ?> </p>
                    <p style="color:black"> <?php echo $randColor; ?> </p>
                    
                <?php endif; ?>
                                  
                </td>
                
            <?php endfor; ?>                
                
            </tr>
            
        <?php endfor; ?>
            
        </table>
    </body>
</html>
