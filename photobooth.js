//heavy riffing off of this https://betterprogramming.pub/photo-booth-app-with-javascript-847d20c97ebd

var startCamera = document.getElementById("start");
startCamera.addEventListener("click", function(e) {
     
       if(this.started === undefined){
            this.started = true;
            fade(this, 0, enableCamera, true);
            window.setTimeout(function(){
                startCamera.textContent = "Take photo";     
            }, 1000);
       }else{
         
           snap();
       }      
    }
);


function fade(obj, val, fCallback, bounce){
    obj.style.opacity = val;
    if(fCallback){
        fCallback();
    }else{
     
    }
       
    if(bounce){
        window.setTimeout(function(){
            var bVal = (val > 0) ? 0 : 1;
           
            fade(obj, bVal);
        }, 1100);
    }else{
        
    }
}



function snap(){
    var canvas = document.createElement('canvas');
    var video = document.getElementById("vid");
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;

    canvas.getContext('2d').drawImage(video,0,0);
    console.log("Snap\nWidth ", canvas.width);
    var reel = document.getElementById('film-strip');
    reel.appendChild(canvas);
    canvas.className = "snap";
}

// const onScreenshot = () => {
//     canvas.width = video.videoWidth;
//     canvas.height = video.videoHeight;
//     canvas.getContext('2d').drawImage(video, 0, 0);
//     prompt2.style.display = 'none'
//     img.src = canvas.toDataURL('image/png');
//     img.style.display = 'block'
//     download.disabled = false
//     select.style.visibility = 'visible'
//     label.style.visibility = 'visible'
//   }



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
            
        }
    })
}
