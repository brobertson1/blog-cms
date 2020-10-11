alert("Hello World");
var firstName = "Jane";           //String type variable
var lastName = "Doe";             //String type variable
var age = 35;                     //Number type variable 
var married = true;                     //boolean type variable
var childrenNames = ["Alice","Bob"];    //Array type variable
var husband = { firstName: "John", lastName: "Doe", age: 35};   //Object type variable

var fullName = firstName+" "+lastName;    //Concatenation operator 
var dogYears = age/7;                   //Arithmatic operator
var isAdult = dogYears>4;               //Comparison operator
var isSettled = isAdult&&married;       //notes say integer type variable, but I think this is a Logic Operator
var fullName = getFullName(firstName, lastName);    //using variables
var fullName = getFullName("Alice","Doe");          //using values

function getFullName (firstName, lastName){
    return firstName +" "+ lastName;
}

function getIsSettled(age, married) {       //function name
        dogYears = age/7;
        isAdult = dogYears > 4;
        isSettled = isAdult&&married;
        return isSettled;                   //return values
}

isSettled = getIsSettled(age, married); //using variables
isSettled = getIsSettled(5, false)      //using functions

//document.write("<h1>Hello World</h1>"); //commented it out because I didn't want to have two H1s on the page
var something = 'word';
console.log(something);

if (isSettled) {
    document.write(fullName + " is settled.");
} else {
    document.write(fullName + " is not settled.");
}

childrenNames.forEach(function(childName) {
    document.write("<li>" +childName+ "<li>");
});

//hidden button messaging

function revealMessage() {
document.getElementByID("hiddenMessage"),style.display = 'block';
}