var crossIcon = $("#x-Icons");
var playerTeam = "";
var aiTeam = "";
var firstChance = "player";
var availablePositions = ["1","2","3","4","5","6","7","8","9"];
var playerPositions = [];
var gamePositions = [];
var playerTurn = true;
var winConditions = [
    ["1","2","3"],
    ["4","5","6"],
    ["7","8","9"],
    ["1","4","7"],
    ["2","5","8"],
    ["3","6","9"],
    ["1","5","9"],
    ["3","5","7"]
  ]
var mainModal = $("#mainModal");
var playerWin = $("#playerWin");
var playerLose = $("#playerLose");
var tie = $("#tie");
var tots = $(".tots");
var zeroIcon = $("#o-Icons");
var playerIcon = null;
var gameIcons = null;


$( window ).on("load", function() {
  mainModal.modal("show");
});

$(".btn-select").click(function(e) {
  var target = e.currentTarget;
  if (target.id == "cross-selected") {
    playerTeam = "x";
    aiTeam = "o";
    playerIcon = crossIcon;
    gameIcons = zeroIcon;
    gameStart();
  } else if (target.id == "circle-selected") {
    playerTeam = "o";
    aiTeam = "x";
    playerIcon = zeroIcon;
    gameIcons = crossIcon
    gameStart();
  }
  mainModal.modal("hide");
})

function gameStart() {
  tots.html("&nbsp;");
  playerPositions = [];
  gamePositions = [];
  availablePositions = ["1","2","3","4","5","6","7","8","9"];
  switch (firstChance) {
    case "player":
      playerTurn = true;
      break;
    case "ai":
      playerTurn = false;
      break;
                   }
  console.log('the playerTurn is '+ playerTurn);
  console.log(availablePositions);
  if (!playerTurn) { gameTurn() };
}

$(".tots").click(function(e) {
  var touched = e.currentTarget.id;
  var availIndex = availablePositions.indexOf(touched);
  if (availIndex > -1 && playerTurn === true && playerIcon != null) {
    $(e.currentTarget).html(playerIcon.clone().removeAttr("id"));
    playerPositions.push(touched);
    availablePositions.splice(availIndex,1);
    var playerWon = winCheck(winConditions, playerPositions);
    if (playerWon) {
      playerWin.modal("show");
      setTimeout(function(){ 
        playerWin.modal("hide");
        firstChance = "player";
        gameStart();
      }, 1500);
    } else if (availablePositions.length > 0) {
      playerTurn = false;
      gameTurn();
    } else {
      tie.modal("show");
      setTimeout(function(){ 
        tie.modal("hide");
        gameStart();
      }, 1500);
    }
  }
})

function gameTurn() {
  console.log("starting AI turn");
  if (playerPositions.length === 0) {
    console.log("player has not gone yet");
    var possible = ["1","3","5","5","7","9"];
    var i = Math.floor(Math.random() * possible.length);
    console.log("random number is: ", i);
    var selected = possible[i];
    var availIndex = availablePositions.indexOf(selected);
    console.log("selected is: ", selected);
    console.log("availIndex is: ", availIndex);
    aiMove(availIndex, selected);
    return true;
  }
  
  var availableOrAI = availablePositions.concat(gamePositions);
  var availableOrPlayer = availablePositions.concat(playerPositions);
  var availableWinConditions = filterConditions(availableOrAI);
  var availableLossConditions = filterConditions(availableOrPlayer);
  console.log("checking for winning moves");
  if (finishChain(availableWinConditions, gamePositions)) { return true; };
  console.log("checking for blocking moves");
  if (finishChain(availableLossConditions, playerPositions)) { return true; };
  console.log("didn't find blocking or winning moves");
  
  var reducedPositions = availablePositions.filter(function(val) {
    for (var i=0; i<availableWinConditions.length; i++) {
      if (availableWinConditions[i].indexOf(val) > -1) {
        return true;
      }
    }
    return false;
  })
  if (reducedPositions.length === 0) {
    reducedPositions = availablePositions.filter(function(val) {
      for (var i=0; i<availableLossConditions.length; i++) {
        if (availableLossConditions[i].indexOf(val) > -1) {
          return true;
        }
      }
      return false;
    })
  }
  if (reducedPositions.length === 0) {
    reducedPositions = availablePositions;
  }
  var i = Math.floor(Math.random() * reducedPositions.length);
  console.log("random number is: ", i);
  var selected = reducedPositions[i];
  var availIndex = availablePositions.indexOf(selected);
  console.log("selected is: ", selected);
  console.log("availIndex is: ", availIndex);
  var moved = aiMove(availIndex, selected)
  console.log("AI moved ", moved);
  if (moved) { return true; };
}

function filterConditions(array) {
  return winConditions.filter(function(val) {
    if (val.every(elem => array.indexOf(elem) > -1)) {
      return true;
    } else {
      return false;
    }
  });
}

function finishChain(conditions, used) {
  console.log("looking for chain of 2 with a free spot");
  console.log("conditions are: ", conditions);
  console.log("looping over conditions");
  for (var i=0; i<conditions.length; i++) {
    var condition = conditions[i];
    var counter = 0;
    var selected = null;
    var selectedIndex = null;
    console.log("current condition is: ", condition);
    for (var i1=0; i1<condition.length; i1++) {
      var current = condition[i1];
      var availIndex = availablePositions.indexOf(current);
      console.log("current is: ", current);
      console.log("availIndex is: ", availIndex);
      if (used.indexOf(current) > -1) {
        console.log("already taken ", current)
        counter++;
      } else if (availIndex > -1) {
        console.log(current, " is available");
        selected = current;
        selectedIndex = availIndex;
      }
      if (counter == 2 && selected != null) {
        console.log("counter check passed, moving");
        var moved = aiMove(selectedIndex, selected)
        console.log("AI moved ", moved);
        if (moved) { return true; };
      }
      console.log("done with ", current);
    }
    console.log("done with ", condition);
  }
  console.log("done with all conditions");
  return false;
}

function aiMove(availIndex, selected) {
  console.log("AI moving");
  if (availIndex > -1) {
    console.log("availIndex check passed, cloning icon");
    $("#"+selected).html(gameIcons.clone().removeAttr("id"));
    console.log("icon cloned");
    gamePositions.push(selected);
    console.log("added selection to gamePositions");
    availablePositions.splice(availIndex,1);
    console.log("removed selection from available list: ", availablePositions);
    var aiWon = winCheck(winConditions, gamePositions);
    if (aiWon) {
      console.log("ai won");
      playerLose.modal("show");
      setTimeout(function(){ 
        playerLose.modal("hide");
        firstChance = "ai";
        gameStart();
      }, 1500);
      return true;
    } else if (availablePositions.length > 0) {
      playerTurn = true;
      return true;
    } else {
      tie.modal("show");
      setTimeout(function(){ 
        tie.modal("hide");
        gameStart();
      }, 1500);
      return true;
    }
  } else {
    return false;
  }
}

function winCheck(conditions, positions) {
  for (var i=0; i<conditions.length; i++) {
    if (conditions[i].every(elem => positions.indexOf(elem) > -1)) {
      return true;
    }
  }
  return false;
}