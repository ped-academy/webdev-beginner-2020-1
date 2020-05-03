const instructionMap = {
  R: 'turnRight',
  L: 'turnLeft',
  A: 'advance'
};

const directions = [
  'north',
  'east',
  'south',
  'west'
];

const advancements = [
  { x: 0, y: 1 },
  { x: 1, y: 0 },
  { x: 0, y: -1 },
  { x: -1, y: 0 },
];

const robot = {
  position: {
    x: 0,
    y: 0,
    direction: "north",
  },
  place: function (position) {
    this.position.x = position.x;
    this.position.y = position.y;
    this.position.direction = position.direction;
    console.log('Placed at:', this.position);
  },
  turnRight: function () {
    const directionIndex = (directions.indexOf(this.position.direction) + 1) % 4;
    this.position.direction = directions[directionIndex];
  },
  turnLeft: function () {
    const directionIndex = (directions.indexOf(this.position.direction) + 3) % 4;
    this.position.direction = directions[directionIndex];
  },
  advance: function () {
    const advancement = advancements[directions.indexOf(this.position.direction)];
    this.position.x += advancement.x;
    this.position.y += advancement.y;
  },
  move: function (instructions) {
    for (let instruction of instructions) {
      if (typeof instructionMap[instruction] !== "undefined") {
        this[instructionMap[instruction]]();
        console.log(`Moved to (${instruction}):`, this.position);
      } else {
        console.error(`Invalid instruction: (${instruction})`)
      }
    }
  },
};

console.log("Usage: > robot.place({ x: 7, y: 3, direction: 'north' }); robot.move('RAALAL');");
robot.place({x: 7, y: 3, direction: 'north'});
robot.move('RAALAL');
