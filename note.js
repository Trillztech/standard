

// script for side nav bar

function change() {
    document.getElementById('good').style.width="100vw";
   }
 
   function closeMenubar(){
     document.getElementById('good').style.width="0px"; 
   }
//    end


//    script for last transactions deposit
$(document).ready(function(){
    setInterval(function(){
        $(ram).load("last_depo.php")
    },
    10000);
})
//    end


//    script for last transactions deposit
$(document).ready(function(){
    setInterval(function(){
        $(ray).load("last_with.php")
    },
    10000);
})
//    end




//    script for dashboard

function openclosex() {
    var jee = document.getElementById('menu');
    var dee = document.getElementById('xbodyx');
    var bad =document.getElementById('bars');
    
    if (dee.style.width != "75%") {
        dee.style.marginLeft="25%";
        jee.style.width="25%";
        dee.style.width="75%";
    }
    
    else{
        dee.style.marginLeft="0%";
        jee.style.width="0%";
        dee.style.width="100%";

    }
}
// end for dashboard 



// script for dashboard smaller screen
//    script for dashboard

function closeopw(){
    var seen = document.getElementById('small-menu');
    
        seen.style.width="100%";
}

function xlosex(){
    var seen = document.getElementById('small-menu');
    
        seen.style.width="0%";
}
// end for smaller dashboard


// script for 
function mentty(){
    var other = document.getElementById('arts');

    other.style.display="block"
}
// end 


function poppyx(){
    var copytext = document.getElementById('add');
    copytext.select();
    document.execCommand('copy');
    alert('copied to clipboard');
}
// end for coins display 


// script for couunter

function guiity() {        
    const countText = document.getElementById('could');
    let load = 0;
    counting=() =>{
        load ++;
        if (load>4344) {
            clearInterval(count);
        }
        countText.innerHTML=`${load}`;
    }
    let count  = setInterval(counting,.1);
    }
// end


    // script for calculator

    function selectcoinx(){
        var plan = document.myforms.selectform.value;
        switch(plan){
        case 'Select A Plan':
        document.myforms.percentage_name.value="0";
        break;
        
        case 'Basic Plan':
            document.getElementById('txtx').innerHTML='<input type="number" name="amount" id="amt" placeholder="$amount" onkeyup="get_total()" min="50" max="999">';
        document.myforms.percentage_name.value="10";
        break;
        
        case "Regular Plan":
            document.getElementById('txtx').innerHTML='<input type="number" name="amount" id="amt" placeholder="$amount" onkeyup="get_total()" min="1000" max="3000">';
        document.myforms.percentage_name.value="12";
        break;
        
        case "Standard Plan":
            document.getElementById('txtx').innerHTML='<input type="number" name="amount" id="amt" placeholder="$amount" onkeyup="get_total()" min="4000" max="6000">'
        document.myforms.percentage_name.value="15";
        break;
        
        case "Premium Plan":
            document.getElementById('txtx').innerHTML='<input type="number" name="amount" id="amt" placeholder="$amount" onkeyup="get_total()" min="6000" max="12000">'
        document.myforms.percentage_name.value="18";
        break;
        
        case "Gold Plan":
            document.getElementById('txtx').innerHTML='<input type="number" name="amount" id="amt" placeholder="$amount" onkeyup="get_total()" min="15000" max="100000">'
        document.myforms.percentage_name.value="20";
        break;
        
        case "Diamond Plan":
            document.getElementById('txtx').innerHTML='<input type="number" name="amount" id="amt" placeholder="$amount" onkeyup="get_total()" min="100000" max="">'
        document.myforms.percentage_name.value="25";
        break;
        
        // deafult:
        // document.myforms.percent.value="hello";
        
        }
        }

            function get_total(){
                per=(document.myforms.percentage_name.value/100)*document.myforms.amount.value;
                document.myforms.roi.value=parseInt(document.myforms.amount.value)+ parseInt(per);
            }
            // end

            
        
// script for investment page
    function paymentcoin(){
        var cryptocoinx = document.base_wallet.crypto.value;
        switch(cryptocoinx){
        
        case 'btc':
        document.base_wallet.reciver_wallet.value="1CnoLhEQ35RQUTUkjEybwiRgtayhZs9JRb";
        document.base_wallet.network.value="btc";
        document.getElementById('address').innerHTML='<input type="text" id="add" value="1CnoLhEQ35RQUTUkjEybwiRgtayhZs9JRb"><input type="submit" value="Copy" onclick="poppyx()" id="btn-cpy">';
        break;
        
        case "eth":
     document.base_wallet.reciver_wallet.value="0xfCCa72383407711c447c5654341caD0361f3";
     document.base_wallet.network.value="Erc20";
     document.getElementById('address').innerHTML='<input type="text" id="add" value="0xfCCa72383407711c447c5654341caD0361f3"><input type="submit" value="Copy" onclick="poppyx()" id="btn-cpy">';
        break;
        
        case "bnb":
    document.base_wallet.reciver_wallet.value="0xfCCa72383407711c447c5654341c941caD0361f3";
    document.base_wallet.network.value="bnb bep20";
    document.getElementById('address').innerHTML='<input type="text" id="add" value="0xfCCa72383407711c447c5654341c941caD0361f3"><input type="submit" value="Copy" onclick="poppyx()" id="btn-cpy">';
        break;
        
        case "usdt":
    document.base_wallet.reciver_wallet.value="TVUQSEcdW4mA6VAh8YgKziY7mQn9LHSkpq";
    document.base_wallet.network.value="usdt Trc20";
    document.getElementById('address').innerHTML='<input type="text" id="add" value="TVUQSEcdW4mA6VAh8YgKziY7mQn9LHSkpq"><input type="submit" value="Copy" onclick="poppyx()" id="btn-cpy">';
        break;
        
        
        }
            }
            // end
        

//    second code for faq 
ParentDivs=document.querySelectorAll('.parent-divs');
ParentDivs.Foreach(ParentDivs=>{
    ParentDivs.addEventLister('click',(e)=>{
        let element = (e.target.children[1])
        element.style.height="200px";
    })
})

// end


// script for confirm box

function showAlert() {
    a = confirm('are you sure you want to proceed ?');
    if (a==true) {
        alert('successful');
    }
    else{}
    return a;
}
// end

