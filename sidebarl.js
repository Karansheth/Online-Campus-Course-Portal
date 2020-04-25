var count=0;
function CSE() {
      if(count%2==1)
    {
          document.getElementById("CSE1").style.display='none';
          document.getElementById("CSE").innerHTML = "+";
          count++;
    }
    else
     {
          document.getElementById("CSE").innerHTML = "-";
          document.getElementById("CSE1").style.display='block';
          count++;
     }
}

var count1=0;
function IT() {
    if(count1%2==1)
    {
        document.getElementById("IT1").style.display='none';
        document.getElementById("IT").innerHTML = "+";
        count1++;
    }
    else
    {
        document.getElementById("IT").innerHTML = "-";
        document.getElementById("IT1").style.display='block';
        count1++;
    }
}

var count2=0;
function ME() {
    if(count2%2==1)
    {
        document.getElementById("ME1").style.display='none';
        document.getElementById("ME").innerHTML = "+";
        count2++;
    }
    else
    {
      document.getElementById("ME").innerHTML = "-";
      document.getElementById("ME1").style.display='block';
      count2++;
    }
}

var count3=0;
function EC() {
    if(count3%2==1)
    {
      document.getElementById("EC1").style.display='none';
      document.getElementById("EC").innerHTML = "+";
      count3++;
    }
    else
    {
      document.getElementById("EC").innerHTML = "-";
      document.getElementById("EC1").style.display='block';
      count3++;
    }
}
