var io = require('socket.io').listen(8080);

io.sockets.on('connection', function (socket) {
  io.sockets.emit('this', { will: 'be received by everyone'});

  socket.on('private message', function (from, msg) {
    console.log('I received a private message by ', from, ' saying ', msg);
    console.log('hello world');
  });

  socket.on('disconnect', function () {
    io.sockets.emit('user disconnected');
  });
});