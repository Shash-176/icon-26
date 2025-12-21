/**
 * Namespace
 */
var Game      = Game      || {};
var Keyboard  = Keyboard  || {}; 
var Component = Component || {};

/**
 * Keyboard Map
 */
Keyboard.Keymap = {
  37: 'left',
  38: 'up',
  39: 'right',
  40: 'down'
};

/**
 * Keyboard Events
 */
Keyboard.ControllerEvents = function() {
  
  // Setts
  var self      = this;
  this.pressKey = null;
  this.keymap   = Keyboard.Keymap;
  
  // Keydown Event
  document.onkeydown = function(event) {
    self.pressKey = event.which;
  };
  
  // Get Key
  this.getKey = function() {
    return this.keymap[this.pressKey];
  };
};

/**
 * Game Component snake
 */
Component.snake = function(canvas, conf) {  
  
  // Sets
  this.keyEvent  = new Keyboard.ControllerEvents();
  this.width     = canvas.width;
  this.height    = canvas.height;
  this.length    = [];
  this.food      = {};
  this.score     = 0;
  this.direction = 'right';
  this.conf      = {
    cw   : 10,
    size : 5,
    fps  : 1000
  };
  
  // Merge Conf
  if (typeof conf == 'object') {
    for (var key in conf) {
      if (conf.hasOwnProperty(key)) {
        this.conf[key] = conf[key];
      }
    }
  }
  
};

/**
 * Game Component Snake
 */
Component.Snake = function(canvas, conf) {
  
  // Game snake
  this.snake = new Component.snake(canvas, conf);
  
  // Init Snake
  this.initSnake = function() {
    
    // Itaration in Snake Conf Size
    for (var i = 0; i < this.snake.conf.size; i++) {
      
      // Add Snake Cells
      this.snake.length.push({x: i, y:0});
		}
	};
  
  // Call init Snake
  this.initSnake();
  
  // Init Food  
  this.initFood = function() {
		
    // Add food on snake
    this.snake.food = {
			x: Math.round(Math.random() * (this.snake.width - this.snake.conf.cw) / this.snake.conf.cw), 
			y: Math.round(Math.random() * (this.snake.height - this.snake.conf.cw) / this.snake.conf.cw), 
		};
	};
  
  // Init Food
  this.initFood();
  
  // Restart snake
  this.restart = function() {
    this.snake.length            = [];
    this.snake.food              = {};
    this.snake.score             = 0;
    this.snake.direction         = 'right';
    this.snake.keyEvent.pressKey = null;
    this.initSnake();
    this.initFood();
  };
};

/**
 * Game Draw
 */
Game.Draw = function(context, snake) {
  
  // Draw snake
  this.drawsnake = function() {
    
    // Check Keypress And Set snake direction
    var keyPress = snake.snake.keyEvent.getKey(); 
    if (typeof(keyPress) != 'undefined') {
      snake.snake.direction = keyPress;
    }
    
    // Draw White snake
		context.fillStyle = "white";
		context.fillRect(0, 0, snake.snake.width, snake.snake.height);
		
    // Snake Position
    var nx = snake.snake.length[0].x;
		var ny = snake.snake.length[0].y;
		
    // Add position by snake direction
    switch (snake.snake.direction) {
      case 'right':
        nx++;
        break;
      case 'left':
        nx--;
        break;
      case 'up':
        ny--;
        break;
      case 'down':
        ny++;
        break;
    }
    
    // Check Collision
    if (this.collision(nx, ny) == true) {
      snake.restart();
      return;
    }
    
    // Logic of Snake food
    if (nx == snake.snake.food.x && ny == snake.snake.food.y) {
      var tail = {x: nx, y: ny};
      snake.snake.score++;
      snake.initFood();
    } else {
      var tail = snake.snake.length.pop();
      tail.x   = nx;
      tail.y   = ny;	
    }
    snake.snake.length.unshift(tail);
    
    // Draw Snake
    for (var i = 0; i < snake.snake.length.length; i++) {
      var cell = snake.snake.length[i];
      this.drawCell(cell.x, cell.y);
    }
    
    // Draw Food
    this.drawCell(snake.snake.food.x, snake.snake.food.y);
    
    // Draw Score
    context.fillText('Score: ' + snake.snake.score, 5, (snake.snake.height - 5));
  };
  
  // Draw Cell
  this.drawCell = function(x, y) {
    context.fillStyle = 'rgb(183, 32, 46)';
    context.beginPath();
    context.arc((x * snake.snake.conf.cw + 6), (y * snake.snake.conf.cw + 6), 4, 0, 2*Math.PI, false);    
    context.fill();
  };
  
  // Check Collision with walls
  this.collision = function(nx, ny) {  
    if (nx == -1 || nx == (snake.snake.width / snake.snake.conf.cw) || ny == -1 || ny == (snake.snake.height / snake.snake.conf.cw)) {
      return true;
    }
    return false;    
	}
};


/**
 * Game Snake
 */
Game.Snake = function(elementId, conf) {
  
  // Sets
  var canvas   = document.getElementById(elementId);
  var context  = canvas.getContext("2d");
  var snake    = new Component.Snake(canvas, conf);
  var gameDraw = new Game.Draw(context, snake);
  
  // Game Interval
  setInterval(function() {gameDraw.drawsnake();}, snake.snake.conf.fps);
};


/**
 * Window Load
 */
window.onload = function() {
  var snake = new Game.Snake('snake', {fps: 100, size: 4});
};

var keys = {};
window.addEventListener("keydown",
    function(e){
        keys[e.keyCode] = true;
        switch(e.keyCode){
            case 37: case 39: case 38:  case 40: // Arrow keys
            case 32: e.preventDefault(); break; // Space
            default: break; // do not block other keys
        }
    },
false);
window.addEventListener('keyup',
    function(e){
        keys[e.keyCode] = false;
    },
false);