var startButton = document.getElementById("start");
var infoButton = document.getElementById("info"); 
const msgArea = document.getElementById("messageContainer");
const keyboardArea = document.getElementById("keyboard");
const reset = document.getElementById("reset");
var started = false;
var round = 0;
var answerHistory = []; //holds the ID of answers so we can see the history of choices

var data = {
        'exchanges': [
            {
                'question':'First question',
                'answers': [ 
                            {'text':'Q1-A1', 'id': '01a'},
                            {'text':'Q1-A2', 'id':'01b'},
                            {'text':'Q1-A3', 'id':'01c'}
                ]
            },
            {
                'question':'Second question',
                'answers': [ 
                    {'text':'Q2-A1', 'id': '02a'},
                    {'text':'Q2-A2', 'id':'02b'},
                    {'text':'Q2-A3', 'id':'02c'}
                ]
            },
            {
                'question':'Third question',
                'answers': [ 
                    {'text':'Q3-A1', 'id': '03a'},
                    {'text':'Q3-A2', 'id':'03b'},
                    {'text':'Q3-A3', 'id':'03c'}
                ]   
            },
            {
                'question':'Fourth question',
                'answers': [ 
                    {'text':'Q4-A1', 'id': '04a'},
                    {'text':'Q4-A2', 'id':'04b'},
                    {'text':'Q4-A3', 'id':'04c'}
                ]
            }
        ],
        'resolutions': [
            {'type': 'typeA', 'text': 'lorem ipsum for type A'},
            {'type': 'typeB', 'text': 'Type B lorem ipsum'},
            {'type': 'typeC', 'text': 'ipsum type C lorem'}
        ]
    }

keyboardArea.addEventListener('click', function(e) {    
    if(e.target.id == 'start' || e.target.parentElement.id == 'start'){
        if(!started){
            sendMessage("Yes, let's start", false);
            round = 0;           
            started = true;
            clearKeyboard();
            setTimeout( ()=> {
                sendMessage(data.exchanges[round].question);
            }, 1000);
            setTimeout(setAnswers, 2000);    
        }
    }else if(e.target.id == 'info' || e.target.parentElement.id == 'info'){
        console.log('info');
    }else if(e.target.classList.contains('reply') || e.target.parentElement.classList.contains('reply')){// reply is the class we'll use to distinguish the actual answers from the data, just to keep this confusing
        let self;
        if(e.target.tagName == 'P'){         
            self = e.target.parentElement;
        }else{
            self = e.target;
        }
        let answerIndex = Array.from(keyboardArea.children).indexOf(self);
        readAnswer(answerIndex);
       
    } 
});


reset.addEventListener("click", () => {
    resetStart();
});

//create message divs, set text, set inbound/outbound
function sendMessage(content, inbound=true){
    
    var msg = document.createElement('div');
    var para = document.createElement('p');
    para.textContent = content;
    msg.appendChild(para);
    msgArea.appendChild(msg);
    msg.classList.add("message");
    inbound ?  msg.classList.add("inbound") : msg.classList.add("outbound");

    msg.classList.add('hidden');

    //single function didn't like assigning multiple classes but here I am doing it in a timeout
    setTimeout( ()=>{
        msg.classList.add('message');
        msg.classList.add('vis');
        msg.classList.remove('hidden');
    }, 500);
    
    msg.scrollIntoView(false);
}

//wipes message area clear
function clearMessages(){
    let messages = msgArea.children;
    console.log("should remove");
 
    while(msgArea.firstChild){ 
        if(msgArea.firstChild == null || msgArea == null){
            break;
          }
          msgArea.removeChild(msgArea.firstChild);
    }
}

//resets starting buttonsto the keyboard area, text and ID elements  id=start,info
function resetStart(){  
    clearMessages();
    sendMessage("Hey, are you ready?");
    clearKeyboard();
    keyboardArea.children[0].classList.remove('hide');
    keyboardArea.children[0].firstChild.textContent = "Yes, let's start";
    keyboardArea.children[0].id = 'start';
    keyboardArea.children[1].classList.remove('hide');
    keyboardArea.children[1].firstChild.textContent = "What is this?";
    keyboardArea.children[1].id = 'info';
    started = false;   
    round = 0;
    answerHistory = [];
}


//wipes keyboard area clear
function clearKeyboard(){       
    for(let i=0; i< keyboardArea.children.length; i++){
        keyboardArea.children[i].classList.add('hide');
        keyboardArea.children[i].firstChild.textContent = '';
        if(keyboardArea.children[i].id != null || keyboardArea.children[i].id != undefined){       
            keyboardArea.children[i].removeAttribute('id');
        }
    }
};

//create answer divs within keyboard are, set text for each div, set interaction as button > assign value to button
function setAnswers(){      
    for(let i=0; i<3; i++){
        keyboardArea.children[i].firstChild.textContent = data.exchanges[round].answers[i].text;
        keyboardArea.children[i].classList.remove('hide');
        keyboardArea.children[i].classList.add('reply');
    }
}

function setAnswer(content, newID){
    //check to see if there are child elements that don't have the .hide class, so we can add multiple individual answers
    keyboardArea.children[0].firstChild.textContent = content;
    keyboardArea.children[0].classList.remove('hide');
    keyboardArea.children[0].classList.remove('reply');
    keyboardArea.children[0].id = newID;
}


//read answer, send as message - outbound
function readAnswer(ans){
    answerHistory.push(data.exchanges[round].answers[ans].id); //log choice
    sendMessage(data.exchanges[round].answers[ans].text, false);
    clearKeyboard();
    round++;
    remainderCheck();  
}

//check for remaining messages
function remainderCheck(){
    if(round < data.exchanges.length){
        setTimeout( ()=>{
            sendMessage(data.exchanges[round].question);  //timout for sending the next question, would be fun to vary the response time up
        }, 1000); 
        setTimeout( ()=> {
            setAnswers(); //timer here for the answers to the new question
        }, 2500) ;
    }else{
        console.log("end");
        started = false;
        setTimeout( ()=>{
            sendMessage("Start again?");
        }, 2000);
        setTimeout( ()=> {
            setAnswer("Yes, let's start", 'start');
        }, 2500);
    }
}




