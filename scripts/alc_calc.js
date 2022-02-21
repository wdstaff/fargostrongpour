window.onload= function(){

document.getElementById('form_submit').onclick = function() {calculate()};


function calculate() {
var x = document.getElementById('cals').value;
document.getElementById('net_carbs').innerHTML = x/4 + " grams of net carbohydrates";
document.getElementById('tsp').innerHTML = (x/4)/5 +" teaspoons of Sugar";
};


};
