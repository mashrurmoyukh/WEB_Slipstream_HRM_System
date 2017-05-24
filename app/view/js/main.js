

// javascript validation

function checkDate(d,m,y){


if( d<1 || d>30)
    {
return false;
    }

else if( m<1 || m>12)
    {

return false;
    }

else if( y<1970 || y>2017)
    {
return false;
    }

else{
    return true;
    }
}

function checkName(n){
if(n=="")
    {
return false;
    }

else if(n.length<5 || n.length>20 )
    {
return false;
    }
else if(n.split(' ').length <2)
    {
        return false;
    }

else
    {
    return true;
    }

}

function checkMail(m){

if(m=="")
    {
        return false;
    }

else if( m.indexOf("@",0) <0 )
    {
        return false;
    }



else if( m.indexOf(".",0) <0 )
    {
        return false;
    }

else
    {
        return true;
    }

}




//Making dropdown menu//





function openDrowpDown1() {
    console.log('clicked');
    document.getElementById("myDropdown1").classList.remove("hide");
    document.getElementById("myDropdown1").classList.toggle("show");
    document.getElementById("myDropdown3").classList.add("hide");
    document.getElementById("myDropdown2").classList.add("hide");
    

}
function openDrowpDown2() {
    console.log('clicked');
    document.getElementById("myDropdown2").classList.remove("hide");
    document.getElementById("myDropdown2").classList.toggle("show");
    document.getElementById("myDropdown1").classList.add("hide");
    document.getElementById("myDropdown3").classList.add("hide");
   
}
function openDrowpDown3() {
    console.log('clicked');
    document.getElementById("myDropdown3").classList.remove("hide");
    document.getElementById("myDropdown3").classList.toggle("show");
    document.getElementById("myDropdown1").classList.add("hide");
    document.getElementById("myDropdown2").classList.add("hide");
   
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

