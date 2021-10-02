const config = {
    type: Phaser.AUTO,
    parent: 'gamespace', 
    width: 1920,
    height: 1080,  
    scale: {
        mode: Phaser.Scale.FIT,         
        autoCenter: Phaser.Scale.CENTER_BOTH,       
    },      
    physics: {
        default: 'arcade', 
        arcade: {       
			gravity:{y:700},
            debug: false
        }
    },
	scene: [CharacterScene],
    backgroundColor: "#4488AA",
};

const game = new Phaser.Game(config);