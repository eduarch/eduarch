var io = require('socket.io').listen(8080);

/*io.sockets.on('connection', function (socket) {
  socket.emit('news', { hello: 'world' });
  socket.on('my other event', function (data) {
    console.log(data);
  });
});*/

io.sockets.on('connection', function(socket) {
	var users = [];

	socket.on('connect', function(data) {
		if(users[socket.id])
			users[socket.id] = data;
	});

	socket.on('message', function(data) {
		
	});
});