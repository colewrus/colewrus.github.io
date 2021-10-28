//heavy riffing off of this https://betterprogramming.pub/photo-booth-app-with-javascript-847d20c97ebd
var delay = 4;
var stopwatch = delay;
var timer = document.getElementById("countdown").children[0];
timer.textContent = delay;
timer.style.opacity = "0";
var startCamera = document.getElementById("start");

var delayInput = document.getElementById("delay");
var photoCount = 0;
var boothStarted = false;

delayInput.addEventListener('change',(event) =>{
    delay = event.target.value;
    timer.textContent = delay;
    stopwatch = delay;
})

startCamera.addEventListener("click", function(e) {     
       if(this.started === undefined){
            this.started = true;
            fade(this, 0, enableCamera, false);        
       }else{  
          !boothStarted ? snap() : console.log("already snapping");
       }      
    }
);


function fade(obj, val, fCallback, bounce){
    obj.style.opacity = val;
    if(fCallback){
        fCallback();
    }       
    if(bounce){
        window.setTimeout(function(){
            var bVal = (val > 0) ? 0 : 1;
           
            fade(obj, bVal);
        }, 1100);
    }
}



function snap(){       
    boothStarted = true;
    if(photoCount < 3){
        var canvas = document.createElement('canvas');
        var video = document.getElementById("vid");
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        
        window.setTimeout(function(){
            canvas.getContext('2d').drawImage(video,0,0);
                console.log("Snap\nWidth ", canvas.width);
                var reel = document.getElementById('film-strip');
                reel.prepend(canvas);
                canvas.className = "snap";   
                download(canvas);
                setTimeout(()=>{
                    canvas.classList.add("present");
                }, 500);
                photoCount++;
                setTimeout(snap, 1000);                                 
        }, delay*1000);

        stopwatch = delay -1;
        timer.textContent = delay;
        timer.style.opacity = "0.75";
        var snapCountdown =  setInterval(function(){
            timer.textContent = stopwatch;
            stopwatch--;
            if(stopwatch === 1){
                timer.style.opacity = "0.3";
            }
            if(stopwatch < 0){
                clearInterval(snapCountdown);
                timer.style.opacity = "0";
            }
        }, 1000);                    
    }else{
        console.log("three photos done");
        boothStarted = false;
    }
    

}

function updateTimer(){  
    timer.textContent = stopwatch;
    stopwatch--;         
    if(stopwatch < 0){
        clearInterval(snapCountdown);
        timer.style.opacity = "0";
    }

}

// const onScreenshot = () => {
//     canvas.width = video.videoWidth;
//     canvas.height = video.videoHeight;
//     canvas.getContext('2d').drawImage(video, 0, 0);
//  
//     img.src = canvas.toDataURL('image/png');
//     img.style.display = 'block'
//     download.disabled = false
//   
//   }

function download(cnvs){
    // console.log("Should get canvas data ", cnvs.toDataURL());
    var link = document.createElement('a');
    link.download = 'download.png';
    link.href= cnvs.toDataURL();
    link.click();
    link.delete;
}

function enableCamera(){
    navigator.mediaDevices.getUserMedia({
        video:{
            width: 1020,
            height: 768                        
        }
    })
    .then(stream => {
        var video = document.getElementById("vid");
        video.srcObject = stream;
        video.onloadedmetadata = function(e){
            // video.play(); seems this is unecessary
            console.log("metadata? " , e);
            fade(startCamera, 1, ()=>{startCamera.textContent = "Take Photo"}, false);            
        }
    })
}