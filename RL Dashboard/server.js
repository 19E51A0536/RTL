var express = require('express');
var app = express();

//set port
var port = process.env.PORT || 1300

app.use(express.static(__dirname + "/public"));

//routes

app.get("/",function(req, res) {
  res.render("index");
})

app.listen(port, function() {
  console.log("app running");
})
