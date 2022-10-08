let weight = prompt("Weight (Kg) =", '');
let height = prompt("Height (m) = ", '');
let bmi = weight / (height * height);
let bmi1 = bmi < 18.5;
if (bmi1)
    alert('Underweight');
else {
    bmi1 = bmi < 25;
    if (bmi1)
        alert('Normal');
    else {
        bmi1 = bmi < 30;
        if (bmi1)
            alert('Overweight');
        else
            alert('Obese');
    }
}