<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Calculator using PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form>
            <input type="text" name="number1" placeholder="Number 1"> <!--First number goes here -->
            <input type="text" name="number2" placeholder="Number 2"><!--Second number goes here -->
            <select name="operator"><!--Choice of operators -->
                <option>None</option>
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
                               
            </select>
            <br>
            <button name="submit" value="submit" type="submit">Calculate </button> 
            <!--Check your funcion here to see values in the URL  -->
        </form>
        <p>The answer is: </p>
        
        <?php
        if (isset($_GET['submit'])){
        $result1 = $_GET['number1']; //Assign number 1 as variable
        $result2 = $_GET['number2']; //Assign number 2 as variable
        $operator = $_GET['operator']; 
        
        switch ($operator) { //if a certain condition is met, echo the following...
        
        case "None":
            echo "Need to select an operator!"; //Error message
            break; 
        
        case "Add":
            echo $result1 + $result2; 
            break; 
            
        
        case "Subtract":
            echo $result1 - $result2; 
            break; 
            
            
         
        case "Multiply":
            echo $result1 & $result2; 
            break; 
            
            
        
        case "Divide":
          echo $result1 / $result2; 
            break; 
        }
        }
        ?>
    </body>
</html>
