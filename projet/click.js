
function debit(){

    var nbQualite = document.getElementById("nbQualite").value;
    var nbBroyeur = document.getElementById("nbBroyeur").value;


    var div2 = document.getElementById("formul2");


    var url = "debit.php?nbBroyeur="+nbBroyeur+"&nbQualite="+nbQualite;


    var xhr = new XMLHttpRequest();
      
        xhr.onreadystatechange = function(){

            if(this.readyState==4 && this.status==200){
                div2.innerHTML = this.response;
            }  
        }

            xhr.open("GET", url , true);
            xhr.responseType= "text";
            xhr.send();

        
        }


        
function elec(){

    var nbQualite = document.getElementById("nbQualite").value;
    var nbBroyeur = document.getElementById("nbBroyeur").value;


    var div3 = document.getElementById("formul3");

    var url = "electricite.php?nbBroyeur="+nbBroyeur+"&nbQualite="+nbQualite;


    var xhr = new XMLHttpRequest();
      
        xhr.onreadystatechange = function(){

            if(this.readyState==4 && this.status==200){
                div3.innerHTML = this.response;
            }  
        }

            xhr.open("GET", url , true);
            xhr.responseType= "text";
            xhr.send();
        }


   
function hebdo(){

    var nbQualite = document.getElementById("nbQualite").value;


    var div4 = document.getElementById("formul4");

    var url = "demandeHebdo.php?nbQualite="+nbQualite;




    var xhr = new XMLHttpRequest();
      
        xhr.onreadystatechange = function(){

            if(this.readyState==4 && this.status==200){
                div4.innerHTML = this.response;
            }  
        }

            xhr.open("GET", url , true);
            xhr.responseType= "text";
            xhr.send();

        }


           
function stock(){

    var nbQualite = document.getElementById("nbQualite").value;


    var div5 = document.getElementById("formul5");

    var url = "stock.php?nbQualite="+nbQualite;




    var xhr = new XMLHttpRequest();
      
        xhr.onreadystatechange = function(){

            if(this.readyState==4 && this.status==200){
                div5.innerHTML = this.response;
            }  
        }

            xhr.open("GET", url , true);
            xhr.responseType= "text";
            xhr.send();
            
        }

                 
function transfert(){

    var nbQualite = document.getElementById("nbQualite").value;
    var nbBroyeur = document.getElementById("nbBroyeur").value;


    var div6 = document.getElementById("formul6");

    var url = "transfert.php?nbBroyeur="+nbBroyeur+"&nbQualite="+nbQualite;




    var xhr = new XMLHttpRequest();
      
        xhr.onreadystatechange = function(){

            if(this.readyState==4 && this.status==200){
                div6.innerHTML = this.response;
            }  
        }

            xhr.open("GET", url , true);
            xhr.responseType= "text";
            xhr.send();
            
        }




