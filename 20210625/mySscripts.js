function myDemo(){

// Create an object:
const car = {type:"Fiat", model:"500", color:"white"};

car.color = "red";

car.owner = "Johnson";

// Display some data from the object:
document.getElementById("demo").innerHTML = "Car owner is " + car.owner;

}