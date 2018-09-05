const http = require('http');

const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');
  res.end('Hello Node World!\n');
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});




/**
'use strict';
const http = require('http');


var server = http.createServer((req, res) => {
res.writeHead(200, {'Content-type':'text/html'});
res.end('<h1>Hello NodeJS</h1>');
}).listen(8080, '10.133.16.227');

server.listen(8080,() => console.log('Server running on port 10.133.16.227:8080'));








const http = ('http'); 

const hostname = '127.0.0.1'; 
const port = 3000;

const server = http.createServer((req,res) => {
    res.statusCode = 200; 
    res.setHeader('Content-type', 'text/plain'); 
    res.end('hello world');
}); 

server.listen(port, hostname, () => {
    console.log('Server started on port' +port); 
});  
 */