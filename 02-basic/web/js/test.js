$(document).ready(function () {

  var i = 0;
  var mediator = new Mediator();

  function printTestMsg (msg) {
    //console.log('test', i);
    mediator.publish("wat", i, "hi", { one: 1 });
    i ++;
  }

  setInterval(printTestMsg, 60000);

  mediator.subscribe("wat", function(){ console.log(arguments); });

});
