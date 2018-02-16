var util = require('util');
var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);


http.listen('8000');
util.log('server start');

io.on('connection', function (socket) {

    console.log("New client connected");
    //if client is connected create new redis client
    //ioredis is javascript redis librabry
    var Redis = require('ioredis');
    var redis = new Redis();


    redis.subscribe('noti');
    redis.subscribe('contact');

    redis.on('message', function (channel, message) {

        console.log("New sub message in queue " + message + "channel");
        var msge = JSON.parse(message);
        //emit method is to send data to socket client
        console.log(msge);
        socket.emit(channel, msge);
    });


    socket.on('disconnect', function () {

        console.log('dis');
    });

});
