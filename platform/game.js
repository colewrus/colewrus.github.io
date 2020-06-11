var config = {
    type: Phaser.AUTO,
    scale: {
        mode: Phaser.Scale.FIT,
        parent: 'gamespace',    
        autoCenter: Phaser.Scale.CENTER_BOTH,
        width: 720,
        height: 360
    },      
    physics: {
        default: 'arcade', 
        arcade: {
            gravity: {y:300},
            debug: true,
        }
    },
    scene: {
        preload: preload,
        create: create,
        render: render,
        update: update        
    },
    backgroundColor: "#4488AA",
};

var game = new Phaser.Game(config);
var player;
var platforms;
var move = false;
var arrows; //arrow keys for keyboard control
var win = false;

var playerSpawn = new Phaser.Math.Vector2();

var text;
var winSound;


function preload(){
    this.load.image('greeble', 'assets/vis/greeble.png');
    this.load.spritesheet('fireball', 'assets/vis/xfireball.png', {frameWidth: 32, frameHeight: 32});
    this.load.image('ground', 'assets/vis/red32x32.png');
    this.load.spritesheet('cole', 'assets/vis/cole-run-only.png', {frameWidth: 32, frameHeight: 32});
    this.load.spritesheet('coinPNG', 'assets/vis/Coin.png', {frameWidth: 32, frameHeight: 32});
    
    //audio
    this.load.audio('bkg', 'assets/audio/harp_bourree.mp3');
    this.load.audio('win', 'assets/audio/trumpet_1.mp3');
}


function create(){       
//AUDIO
    var bkgMusic = this.sound.add('bkg', {volume: 0.12, loop: true});
    bkgMusic.play();

    winSound = this.sound.add('win', {volume: 0.25});

//PLATFORMS
    platforms = this.physics.add.staticGroup();
  
    platforms.create(32*4, this.game.canvas.height-16,'ground').setScale(8, 1).refreshBody();   
    platforms.create(this.game.canvas.width-32*5, this.game.canvas.height-16, 'ground').setScale(10,1).refreshBody();

//FIREBALL
    var fireball_config = {
        key: 'base',
        frames: this.anims.generateFrameNumbers('fireball', {end:4 }),
        frameRate: 12,        
        repeat: -1        
    }
   fireball_anim = this.anims.create(fireball_config);
   fireball = this.physics.add.sprite(300, this.game.canvas.height + 16, 'fireball');     
   fireball.body.setAllowGravity(false);
   
   fireball.body.setCircle(14,0,0);
   fireball.angle = 90;
   fireball.anims.load('base'); 
   fireball.anims.play('base');

   var fireballTween = this.tweens.add({
       targets: fireball,
       y: 220,
       ease: 'Linear',
       duration: 1500,
       repeat: -1, 
       yoyo: true,
       flipX: true,
   })
//COIN
  
    var coin = this.physics.add.sprite(this.game.canvas.width-32, this.game.canvas.height - 75, 'coinPNG');
    coin.body.setAllowGravity(false);
    coin.body.setCircle(11,5,5);

//PLAYER  
   var player_config = {
       key: 'run',
       frames: this.anims.generateFrameNumbers('cole'),
       frameRate: 12,
       repeat: -1
   }
   player = this.physics.add.sprite(32, 270, 'cole');
   player.setBounce(0.2);
   player.setCollideWorldBounds(false);
   player.body.setSize(12,32);

   player_anim = this.anims.create(player_config);
   player.anims.load('run');
   player.anims.play('run');
   playerSpawn.set(32, 270);


//Controls
   arrows = this.input.keyboard.createCursorKeys();

//Physics

   this.physics.add.collider(player, platforms);
   this.physics.add.overlap(player, fireball, fireballTouch);
   this.physics.add.overlap(player, coin, setWin);

//Win State
   text = this.add.text(300, 50, "You Win");
   text.setVisible(false);

}

// ----END OF CREATE

function render(){
    game.debug.inputInfo(32, 32);
    game.debug.pointer(game.input.activePointer);
}


function update(){   
   
    if(arrows.left.isDown){
        player.setVelocityX(-160);
        player.flipX = true;
    }else if(arrows.right.isDown){
        player.setVelocityX(160);
        player.flipX = false;   
    }else{
        player.setVelocityX(0);
    }
  
    if(arrows.up.isDown && player.body.touching.down){   
        player.setVelocityY(-275);
        let timedEvent = this.time.delayedCall(500, jumpDecay)
    }

    if(!player.body.touching.down && arrows.up.isUp && player.body.velocity.y < 0){
        jumpDecay();
    }
 

    checkPlayerOOB(player);     
}

function jumpDecay(){
    console.log("j decay");
    player.setVelocityY(0);
}

function checkPlayerOOB(p){
    if(p.getBounds().y > this.game.canvas.height){
        console.log("Player off screen");
        p.setPosition(playerSpawn.x, playerSpawn.y);
    }
}

function respawnPlayer(){
    player.setPosition(playerSpawn.x, playerSpawn.y);
}

function fireballTouch(){
    respawnPlayer();
}

function setWin(){
    if(!win){  
        text.setVisible(true);
        winSound.play();
        win = true;          
    }
}

