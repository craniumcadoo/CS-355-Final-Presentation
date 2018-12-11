var today = new Date();
var currMonth = today.getMonth();
var currYear = today.getFullYear();

let months = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec"    
];

var monthAndYear = document.getElementById("monthAndYear");

function showCalendar(month, year);
{
    
var firstDay = new Date(year, month).getDay();
var daysInMonth = 32 - newDate(year, month, 32).getDate();

var table = document.getElementById("monthly");

table.innerHTML = "";

monthAndYear.innerHTML = months[month] + " " + year;

var date = 1;

for(var i=0; i<6; i++)
{
  var row = document.createElement("tr");
    
    for(var j=0; j<7; j++)
        {
            if(i==0 && j<firstDay)
                {
                    var cellText = document.createTextNode("");
                    
                    cell.appendChild(cellText);
                    row.appendChild(cell);
                } else if (date > daysInMonth)
                    {
                        break;
                    } else
                        {
                            var cellText = document.createElement(date);
                            cell.appendChild(cellText);
                            row.appendChild(cell);
                        }
            date++;
        }
    table.appendChild(row);
}
}

var date = new Date();
document.getElementById("date").innerHTML = date;

