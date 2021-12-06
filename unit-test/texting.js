const startButton = document.getElementById("start");
const infoButton = document.getElementById("info"); 
const msgArea = document.getElementById("messageContainer");
const keyboardArea = document.getElementById("keyboard");



startButton.addEventListener("click", () => {
    console.log("Start");
});


infoButton.addEventListener("click", () => {
    console.log("info");
});


function sendMessage(content, inbound=true){
    console.log("sending message " + content);
    var msg = document.createElement('div');
    var para = document.createElement('p');
    para.textContent = content;
    msg.appendChild(para);
    msgArea.appendChild(msg);
    msg.classList.add("message");
    inbound ?  msg.classList.add("inbound") : msg.classList.add("outbound");
}


//wipes message area clear
//wipes keyboard area clear
//resets starting buttonsto the keyboard area, text and ID elements  id=start,info


//create answer divs, set text
//create message divs, set text, set inbound/outbound

//check for remaining messages
//set messages container to provide "exchanges" - the combination of the question with possible answers - string, list of strings
    //Object it here

