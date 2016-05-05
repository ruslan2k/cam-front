$(document).ready(function () {

  var i = 0;

  function printTestMsg (msg) {
    console.log('test', i);
    i ++;
  }

  setInterval(printTestMsg, 60000);

});
