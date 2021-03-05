//making sure this passes fine so we can init keyboard controls or not depending on if it's a mobile device
var IS_TEST = false;

window.addEventListener('touchstart', function(){
	if(!IS_TEST){
		IS_TEST = true;
		console.log("Menu touch start");
	}
});

class MenuScene extends Phaser.Scene{
	
	constructor(){
		super('MenuScene');
	}
	
	preload(){
		for( var audioID in gameData.sounds){
			
			var audioAsset = hgGet('sounds.' + audioID);
			if(audioAsset != null){
				this.load.audio(audioID, audioAsset);				
			}else{
				console.log("Audio preload whoop " + audioID);
			}
		}
		
	}
	
	create(){		

		//create and play the menu music
		let music = this.sound.add('menuMusic', { 
			mute: false,
			volume: 0.3, 
			loop: true,
			delay: 500
		});
		music.play();

		let me = this;
		//this will be the animated start button that uses graphics rather than an object
		let gStart = this.add.graphics();		
		gStart.fillStyle(0x0056B3, 1);		
		gStart.fillRoundedRect(780, -150, 400, 150, 32);

		//we'll create an object that can actually be interacted with
		let start = this.add.rectangle(980, 415, 400, 150, 0xffffff, 0);

		//animate the start button down
		let tween = this.tweens.add({
			targets: gStart,
			duration: 200,
			delay: 500,
			x: 0,
			y:490,
			onComplete: function(){
				me.add.text(980,400,'Start Game',{
					align:'center',
					fill: '#EEECCC',
					fontFamily: 'sans-serif',
					fontSize: 49,
				}).setOrigin(0.5, 0);
				start.setInteractive(); //we make the shape object interactable
			}
		})
	
				
		console.log("menu scene loads");	
		
		//shape object to start the game
		start.on('pointerdown', ()=>{
			music.stop();
			this.scene.switch('Scene1');
		})
		
	
	}
	

}