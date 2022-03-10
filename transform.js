




function checkVIPClass(cp){
    //alert("inside vip class");
    if (cp.checked){
        //alert(cp.value);
        window.location.href="adminVIP.php?vipadd="+cp.value;
    } else{
        window.location.href="adminVIP.php?vipdel="+cp.value;

    }




}



function priceSearch(){
   let minbar= document.getElementById("minbar").value;
   let maxbar= document.getElementById("maxbar").value;
    //alert("min bar: "+minbar);

    window.location.href="store.php?min="+minbar+"&max="+maxbar;
}





function checkABCDABCD(chkABCD){
    
    var numPhone=document.getElementById("numPhone").value;


    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone), myFunc);

    
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        return;
    } else{
        //cas1 4-4-2
        let digit11=phoneArr.slice(0,4);
    
        let digit12=phoneArr.slice(4,8);

        let digit13=phoneArr.slice(8,10);
        if((digit11[0]===digit12[0])&& (digit11[1]===digit12[1])&&(digit11[2]===digit12[2])&&(digit11[3]===digit12[3])){
            let str=String(digit11[0])+String(digit11[1])+String(digit11[2])+String(digit11[3])+"  "+String(digit12[0])+String(digit12[1])+String(digit12[2])+String(digit12[3])+"  "+String(digit13[0])+String(digit13[1]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

        //cas2 1-4-4-1

        //cas3 2-4-4
    }

}




function check00000(){
    //alert("******************************* 00000 checked")
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(0,5);
    
        let digit12=phoneArr.slice(5,10);
        
        
        if((digit11[0]===0)&& (digit11[1]===0)&&(digit11[2]===0)&&(digit11[3]===0)&&(digit11[4]===0)){
            let str=String(digit11[0])+String(digit11[1])+String(digit11[2])+String(digit11[3])+String(digit11[4])+"  "+String(digit12[0])+String(digit12[1])+String(digit12[2])+String(digit12[3])+String(digit12[4]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }
        //cas 1-5-4
        digit11=phoneArr.slice(0,1);
    
        digit12=phoneArr.slice(1,6);
        let digit13=phoneArr.slice(6,10);
        //alert(digit11);
        
        if((digit12[0]===0)&& (digit12[1]===0)&&(digit12[2]===0)&&(digit12[3]===0)&&(digit12[4]===0)){
            let str=String(digit11[0])+" "+String(digit12[0])+String(digit12[1])+String(digit12[2])+String(digit12[3])+String(digit12[4])+"  "+String(digit13[0])+String(digit13[1])+String(digit13[2])+String(digit13[3]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

        //cas 2-5-3

        //cas 3-5-2

        //cas 4-5-1

        //cas 5-5 reverse


    }

}
 


function check000000(){
    //alert("******************************* 00000 checked")
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(0,6);
    
        let digit12=phoneArr.slice(6,10);
        
        
        if((digit11[0]===0)&& (digit11[1]===0)&&(digit11[2]===0)&&(digit11[3]===0)&&(digit11[4]===0)&&(digit11[5]===0)){
            let str=String(digit11[0])+String(digit11[1])+String(digit11[2])+String(digit11[3])+String(digit11[4])+String(digit11[5])+"  "+String(digit12[0])+String(digit12[1])+String(digit12[2])+String(digit12[3]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

    }

}



function check00X00(){
    //alert("******************************* 00000 checked")
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(0,5);
    
        let digit12=phoneArr.slice(5,10);
        
        
        if((digit11[0]===0)&& (digit11[1]===0)&&(digit11[3]===0)&&(digit11[4]===0)){
            let str=String(digit11[0])+String(digit11[1])+String(digit11[2])+String(digit11[3])+String(digit11[4])+"  "+String(digit12[0])+String(digit12[1])+String(digit12[2])+String(digit12[3])+String(digit12[4]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

    }

}

function check3DIGIT(){

    //alert("******************************* 00000 checked")
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(0,10);
    
        
        
        
        //if((digit11[0]===0)&& (digit11[1]===0)&&(digit11[3]===0)&&(digit11[4]===0)){
            let str=String(digit11[0])+String(digit11[1])+String(digit11[2])+" "+String(digit11[3])+String(digit11[4])+String(digit11[5])+String(digit11[6])+" "+String(digit11[7])+String(digit11[8])+String(digit11[9]);
             document.getElementById("formattedPhone").innerText=str;
            return;
        //}

    }


}


function check786(){

    //alert("******************************* 00000 checked")
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(0,3);
    
        let digit12=phoneArr.slice(3,10);
        
        
        if((digit11[0]===7)&& (digit11[1]===8)&&(digit11[2]===6)){
            let str=String(digit11[0])+String(digit11[1])+String(digit11[2])+" "+String(digit12[0])+String(digit12[1])+String(digit12[2])+String(digit12[3])+String(digit12[4])+String(digit12[5])+String(digit12[6]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

    }




}

function checkABCDXYABCD(){

    //alert("******************************* 00000 checked");
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(0,4);
    
        let digit12=phoneArr.slice(6,10);
        let digit13=phoneArr.slice(4,6);
        
        if((digit11[0]===digit12[0])&& (digit11[1]===digit12[1])&&(digit11[2]===digit12[2])&&(digit11[3]===digit12[3])){
            let str=String(digit11[0])+String(digit11[1])+String(digit11[2])+String(digit11[3])+" "+String(digit13[0])+String(digit13[1])+" "+String(digit12[0])+String(digit12[1])+String(digit12[2])+String(digit12[3]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

    }




}


function checkEND000(){

    //alert("******************************* 00000 checked");
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(7,10);
    
        let digit12=phoneArr.slice(0,7);
        
        if((digit11[0]===0)&& (digit11[1]===0)&&(digit11[2]===0)){
            let str=String(digit12[0])+String(digit12[1])+String(digit12[2])+String(digit12[3])+String(digit12[4])+String(digit12[5])+String(digit12[6])+" "+String(digit11[0])+String(digit11[1])+String(digit11[2]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

    }




}


function checkEND0000(){

    //alert("******************************* 00000 checked");
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(6,10);
    
        let digit12=phoneArr.slice(0,6);
        
        if((digit11[0]===0)&& (digit11[1]===0)&&(digit11[2]===0)&&(digit11[3]===0)){
            let str=String(digit12[0])+String(digit12[1])+String(digit12[2])+String(digit12[3])+String(digit12[4])+String(digit12[5])+" "+String(digit11[0])+String(digit11[1])+String(digit11[2])+String(digit11[3]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

    }




}



function checkEND0000X(){

    //alert("******************************* 00000 checked");
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(5,9);
    
        let digit12=phoneArr.slice(0,5);
        let digit13=phoneArr.slice(9,10);
        
        if((digit11[0]===0)&& (digit11[1]===0)&&(digit11[2]===0)&&(digit11[3]===0)){
            let str=String(digit12[0])+String(digit12[1])+String(digit12[2])+String(digit12[3])+String(digit12[4])+" "+String(digit11[0])+String(digit11[1])+String(digit11[2])+String(digit11[3])+" "+String(digit13[0]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

    }




}


function checkEND0000XY(){

    //alert("******************************* 00000 checked");
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(4,8);
    
        let digit12=phoneArr.slice(0,4);
        let digit13=phoneArr.slice(8,10);
        
        if((digit11[0]===0)&& (digit11[1]===0)&&(digit11[2]===0)&&(digit11[3]===0)){
            let str=String(digit12[0])+String(digit12[1])+String(digit12[2])+String(digit12[3])+" "+String(digit11[0])+String(digit11[1])+String(digit11[2])+String(digit11[3])+" "+String(digit13[0])+String(digit13[1]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

    }




}





function checkEND000X(){

    //alert("******************************* 00000 checked");
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(6,9);
    
        let digit12=phoneArr.slice(0,6);
        let digit13=phoneArr.slice(9,10);
        
        if((digit11[0]===0)&& (digit11[1]===0)&&(digit11[2]===0)){
            let str=String(digit12[0])+String(digit12[1])+String(digit12[2])+String(digit12[3])+String(digit12[4])+String(digit12[5])+" "+String(digit11[0])+String(digit11[1])+String(digit11[2])+" "+String(digit13[0]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

    }




}



function checkEND000XY(){

    //alert("******************************* 00000 checked");
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(5,8);
    
        let digit12=phoneArr.slice(0,5);
        let digit13=phoneArr.slice(8,10);
        
        if((digit11[0]===0)&& (digit11[1]===0)&&(digit11[2]===0)){
            let str=String(digit12[0])+String(digit12[1])+String(digit12[2])+String(digit12[3])+String(digit12[4])+" "+String(digit11[0])+String(digit11[1])+String(digit11[2])+" "+String(digit13[0])+String(digit13[1]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

    }




}




function checkENDXXX(){

    //alert("******************************* 00000 checked");
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(7,10);
    
        let digit12=phoneArr.slice(0,7);
        
        
        if((digit11[0]===digit11[1])&&(digit11[1]===digit11[2])){
            let str=String(digit12[0])+String(digit12[1])+String(digit12[2])+String(digit12[3])+String(digit12[4])+String(digit12[5])+String(digit12[6])+" "+String(digit11[0])+String(digit11[1])+String(digit11[2]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

    }




}




function checkENDXYXYXY(){

    //alert("******************************* 00000 checked");
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(4,10);
    
        let digit12=phoneArr.slice(0,4);
        
        
        if((digit11[0]===digit11[2])&&(digit11[2]===digit11[4])&&(digit11[1]===digit11[3])&&(digit11[3]===digit11[5])){
            let str=String(digit12[0])+String(digit12[1])+String(digit12[2])+String(digit12[3])+" "+String(digit11[0])+String(digit11[1])+" "+String(digit11[2])+String(digit11[3])+" "+String(digit11[4])+String(digit11[5]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

    }




}




function checkENDXYZXYZ(){

    //alert("******************************* 00000 checked");
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(4,10);
    
        let digit12=phoneArr.slice(0,4);
        
        
        if((digit11[0]===digit11[3])&&(digit11[1]===digit11[4])&&(digit11[2]===digit11[5])){
            let str=String(digit12[0])+String(digit12[1])+String(digit12[2])+String(digit12[3])+" "+String(digit11[0])+String(digit11[1])+String(digit11[2])+" "+String(digit11[3])+" "+String(digit11[4])+String(digit11[5]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

    }




}









function checkMDL0000(){

    //alert("******************************* 00000 checked");
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(3,7);
    
        let digit12=phoneArr.slice(0,3);
        let digit13=phoneArr.slice(7,10);
        
        if((digit11[0]===0)&&(digit11[1]===0)&&(digit11[2]===0)&&(digit11[3]===0)){
            let str=String(digit12[0])+String(digit12[1])+String(digit12[2])+" "+"0000"+" "+String(digit13[0])+String(digit13[1])+String(digit13[2]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

    }




}



function checkMDLXYXYXY(){

    //alert("******************************* 00000 checked");
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(2,8);
    
        let digit12=phoneArr.slice(0,2);
        let digit13=phoneArr.slice(8,10);
        
        if((digit11[0]===digit11[2])&&(digit11[2]==digit11[4])&&(digit11[1]===digit11[3])&&(digit11[3]===digit11[5])){
            let str=String(digit12[0])+String(digit12[1])+" "+digit11[0]+digit11[1]+" "+digit11[2]+digit11[3]+" "+digit11[4]+digit11[5]+" "+String(digit13[0])+String(digit13[1]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

    }




}



function checkMIRROR(){

    //alert("******************************* 00000 checked");
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(0,5);
    
        let digit12=phoneArr.slice(5,10);
        
        
        if((digit11[0]===digit12[4])&&(digit11[1]==digit12[3])&&(digit11[2]===digit12[2])&&(digit11[3]===digit12[1])&&(digit11[4]===digit12[0])){
            let str=String(digit11[0])+String(digit11[1])+digit11[2]+digit11[3]+digit11[4]+" "+digit12[0]+digit12[1]+digit12[2]+digit12[3]+digit12[4];
             document.getElementById("formattedPhone").innerText=str;
            return;
        }

    }




}




function checkSTRXYXYXY(){

    //alert("******************************* 00000 checked");
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(0,6);
    
        let digit12=phoneArr.slice(6,10);
        
        
        if((digit11[0]===digit11[2])&&(digit11[0]===digit11[4])&&(digit11[1]===digit11[3])&&(digit11[1]===digit11[5])){
            let str=String(digit11[0])+String(digit11[1])+" "+String(digit11[2])+String(digit11[3])+" "+String(digit11[4])+String(digit11[5])+" "+String(digit12[0])+String(digit12[1])+String(digit12[2])+String(digit12[3]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

    }




}









function checkSTRXYZXYZ(){

    //alert("******************************* 00000 checked");
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    //alert(phoneArr);
    
    
    if ((phoneArr.length<10)||(phoneArr.length>10)){
        
        return;
    } else{
        //cas 5-5
        let digit11=phoneArr.slice(0,6);
    
        let digit12=phoneArr.slice(6,10);
        
        
        if((digit11[0]===digit11[3])&&(digit11[1]===digit11[4])&&(digit11[2]===digit11[5])){
            let str=String(digit11[0])+String(digit11[1])+String(digit11[2])+" "+String(digit11[3])+String(digit11[4])+String(digit11[5])+" "+String(digit12[0])+String(digit12[1])+String(digit12[2])+String(digit12[3]);
            document.getElementById("formattedPhone").innerText=str;
            return;
        }

    }




}








function checkSIMPLE(){
    if((document.getElementById("numPhone").value.length>10)||(document.getElementById("numPhone").value.length<10)){
    //alert("Insert the phone number!");
    return;
    }
    document.getElementById("formattedPhone").innerText=document.getElementById("numPhone").value;;   
}
function checkPhone(){
   // alert("check phone");
  // alert(document.getElementById("ftNumber").innerText);
    if (document.getElementById("SIMPLE").checked){
        document.getElementById("formattedPhone").innerText=document.getElementById("numPhone").value;
    }
}


function insertNumber(){
    //alert("insert number");
    var number=document.getElementById("numPhone").value;
    //alert(number);
    var ftNumber=document.getElementById("formattedPhone").innerText;
    var price=document.getElementById("price").value;
    var indice1=document.getElementById("indice1").value;
    var indice2=document.getElementById("indice2").value;
     var indice3=document.getElementById("indice3").value;
     var ele = document.getElementsByName('format');
     var type=1;
    var typeText1="ABDC-ABCD";

              
            for(i = 0; i < ele.length; i++) {
                if(ele[i].checked){
                    
                    type=i;
                    typeText1=ele[i].value;
                   // window.alert(ele[i].value);
                }
            }
    
    
            //alert(number);
            if((number.length<10)||(number.length>10)||(price.length==0)||(indice1.length==0)||(indice2.length==0)||(indice3.length==0)){
                alert("Incomplete DATA!");   
                return; 
            }
            
            



  window.location.href="admin.php?numero="+number+"&ftNumber="+ftNumber+"&indice1="+indice1+"&indice2="+indice2+"&indice3="+indice3+"&type="+type+"&typeText1="+typeText1+"&price="+price;
            
   //window.location.assign("admin.php?number="+number+"&ftNumber="+ftNumber+"&indice1="+indice1+"&indice2="+indice2+"&indice3="+indice3+"&type="+type+"&typeText1="+typeText1+"&price="+price);


}


function applyFormatting(){
    var ele = document.getElementsByName('format');
    for(i = 0; i < ele.length; i++) {
        if(ele[i].checked){
            
            type=i;
            let aform=ele[i].value;
            //alert(aform);
            switch (aform){
                case "SIMPLE": document.getElementById("formattedPhone").innerText=document.getElementById("numPhone").value;
                case "00000 NUMBERS": check00000();
                case "000000 NUMBERS":check000000();

                case "00X00 & 00XY00":check00X00(); 
                case "3 DIGIT NUMBER": check3DIGIT();
                case "786 SPECIAL": check786();
                case "ABCD-ABCD": checkABCDABCD();
                case "ABCD-XY-ABCD": checkABCDXYABCD();
                case "DOUBLING NUMBER": ;
                case "ENDING 000" : checkEND000();
                case "ENDING 0000" :checkEND0000();
                case "ENDING 0000X" :checkEND0000X();
                case "ENDING 0000XY" :checkEND0000XY();
                case "ENDING 000X" :checkEND000X();
                case "ENDING 000XY" :checkEND000XY();
                case "ENDING XXX" :checkENDXXX();
                case "ENDING XY-XY-XY" :checkENDXYXYXY();
                case "ENDING XYZ-XYZ" :checkENDXYZXYZ();
                case "MIDDLE 0000" :checkMDL0000();
                case "MIDDLE XY-XY-XY":checkMDLXYXYXY(); 
                case "MIRROR NUMBER" :checkMIRROR();
                 
                case "STARTING XY-XY-XY" :checkSTRXYXYXY();
                case "STARTING XYZ-XYZ" :checkSTRXYZXYZ();
                
                


            }

           // window.alert(ele[i].value);
        }
    }
}





function checkredirect(btn){

    //alert(btn.value);
    window.location.href="store.php?cat="+btn.value;


}

function gotoadd(num){
    window.location.href="myCartOrder.php?add="+num;
}

