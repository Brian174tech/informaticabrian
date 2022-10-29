var a = 7;
var b = 10;
var c = 3;
a = a + 5;
b += 5;
b -= c;
b *= 3;
b /= 11;

var myString = " ik zei:\"dat ik zei:\"dat dit my string is\"\"";
var mijnString = '\n ik zei:"dat ik zei:"dat dit mijn string is""';
myString += mijnString;
console.log(myString)
console.log(myString[2])

let name = 'Brian';
let age = 32;
let isApproved = false;
let firstName = undefined;
let middleName;
let lastName = null;
let selectedChoice = null;
console.log(firstName);

let person = {
    name: 'Brian',
    age: 32
};
person.name = 'Brian';
person['name'] = 'Brian';
console.log(person);

let selectedOption = ['kat','hond','hamster'];
selectedOption[3] = 1; //zero based indexing
selectedOption[2] = 'cavia';
console.log(selectedOption);
console.log(selectedOption.lenght);

function sayHello(hiName, haName) {
    console.log('Hallo ' + hiName + ' en ' + haName);
}
sayHello('Frans', 'Ekko')

function dubbel(number){
    return number + number;
}
let number = dubbel(2);
console.log(number);

function woordSpel(jeNaam, eenCijfer, eenEigenschap, eenSnack, eenVervoersmiddel ){
    var spreuk = "";
    spreuk += jeNaam + " was " + eenEigenschap + " op weg met de " + eenVervoersmiddel + " om een " + eenSnack + " te scoren, wel verdiend! " + jeNaam + " had namelijk een " + eenCijfer + " behaald voor de toetsing.";
    return spreuk;
}
console.log(woordSpel("Brian", "10", "slim", "tosti", "auto"));

function navmenu(){
    
}