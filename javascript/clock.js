// Date object
const date = new Date();
let currentDay= String(date.getDate()).padStart(2, '0');
let currentMonth = String(date.getMonth()+1).padStart(2,"0");
let currentYear = date.getFullYear();
// we will display the date as DD-MM-YYYY 
let currentDate = `${currentDay}-${currentMonth}-${currentYear}`;
document.getElementById('date').innerHTML = currentDate;



function startTime() {
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('clock').innerHTML =  h + ":" + m + ":" + s;
    setTimeout(startTime, 1000);
  }
  
  function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
  }


    let day = new Date();
    let hr = day.getHours();
    if (hr >= 0 && hr < 12) {
        document.getElementById('timeOfDay').innerHTML= "Goodmorgen";
    } else if (hr >= 12 && hr <= 17) {
        document.getElementById('timeOfDay').innerHTML= "Goedemiddag";
    } else {
        document.getElementById('timeOfDay').innerHTML= "Goedeavond";
    }