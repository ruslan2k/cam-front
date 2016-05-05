$(document).ready(function () {

  var i = 0
    , mediator = new Mediator();


  function printTestMsg (msg) {
    //console.log('test', i);
    mediator.publish("wat", 7, "hi", { one: i });
    i ++;
  }

  setInterval(printTestMsg, 60000);

  mediator.subscribe("wat", function(){ console.log(arguments); });
  //mediator.publish("wat", 7, "hi", { one: 1 });

});
