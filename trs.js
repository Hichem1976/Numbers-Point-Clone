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


function check000000(){

    alert("good");
}





function checkA00000(){
    alert("******************************* 00000 checked");
    var numPhone=document.getElementById("numPhone").value;
    

    let myFunc = num => Number(num);
 
    var phoneArr = Array.from(String(numPhone).trim(), myFunc);

    alert(phoneArr);
    
    
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
        let digit11=phoneArr.slice(0,1);
    
        let digit12=phoneArr.slice(1,6);
        let digit13=phoneArr.slice(6,10);
        alert(digit11);
        
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

function insertNumber(){
    var number=document.getElementById("numPhone").value;
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
    
    //document.open("admin.php?number="+number+"&ftNumber="+ftNumber+"&indice1="+indice1+"&indice2="+indice2+"&indice3="+indice3+"&type="+type+"&typeText1="+typeText1);
    

    window.location.href="admin.php?number="+number+"&ftNumber="+ftNumber+"&indice1="+indice1+"&indice2="+indice2+"&indice3="+indice3+"&type="+type+"&typeText1="+typeText1+"&price="+price;
            



}

