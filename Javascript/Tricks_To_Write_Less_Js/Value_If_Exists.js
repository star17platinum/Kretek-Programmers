// ASSIGN A VALUE IF EXISTS

// let port;

// if (process.env.PORT) {
//   port = process.env.PORT;
// } else {
//   port = 5000;
// }

// ===>
let port = process.env.PORT || 5000;
