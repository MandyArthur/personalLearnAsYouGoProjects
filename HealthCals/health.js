
function ConvertInches(){
    var hInches = 10; // Height in Inches
var hMetres = (hInches* 39.37); 
document.write("Height in Metres: " + hMetres + " m<br/>");
}



function ConvertPounds(p1){
    var wPounds = p1; //Weight in pounds
    var wKgs = (wPounds*0.45359237); 

    document.write("Height in Kilograms: " + wKgs + " kgs<br/>");
}

    document.getElementById("demo").innerHTML = ConvertPounds(100); 

function BMI(){
    var BMI = (wKgs/hMetres); 

    document.write("BMI: " + BMI + " <br/>");

}