let http = require('http').Server();
let io = require('socket.io')(http);
let Redis = require('ioredis');

let redis = new Redis({ host: 'redis' });
redis.subscribe('chat');
redis.on('message', (channel, message) => {
    message = JSON.parse(message);
    io.emit(channel + ':' + message.event, message.data);
});

http.listen(3000, () => {
    console.log('Server Listen Port 3000')
});

