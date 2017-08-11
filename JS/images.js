//all the stuff that needs to be included
var http = require('http'),
    fs = require('fs'),
    path = require('path'),
    url = require('url');
    imageDir = '/home/madeline/Website/Media/2016/images/';
 
//create http server
http.createServer(function (req, res) {
    //get the image names and put them in the html tags
    var query = url.parse(req.url,true).query;
        pic = query.image;
 
    if (typeof pic === 'undefined') {
        getImages(imageDir, function (err, files) {
            var imageLists = '<ul style="list-style-type:none">';
            for (var i=0; i<files.length; i++) {
                imageLists += '<li><img src="/?image=' + files[i] + ' "style="width:200px">' + '</li>';
            }
            imageLists += '</ul>';
            res.writeHead(200, {'Content-type':'text/html'});
            res.end(imageLists);
        });
    } else {
        //read the image using fs (file system module) and send back the image
        fs.readFile(imageDir + pic, function (err, content) {
            if (err) {
                res.writeHead(400, {'Content-type':'text/html'})
                console.log(err);
                res.end("No such image");//I do not know what would cause this to display
            } else {
                //specify the content type in the response will be an image
                res.writeHead(200,{'Content-type':'image/jpg'});
                res.end(content);
            }
        });
    }
 
}).listen(8080);
console.log("Server running at http://localhost:8080/");
 
//get the list of images in the directory
function getImages(imageDir, callback) {
    var fileType = '.jpg',
        files = [], i;
    fs.readdir(imageDir, function (err, list) {
        for(i=0; i<list.length; i++) {
            if(path.extname(list[i]) === fileType) {
                files.push(list[i]); //store the file name into the array "files"
            }
        }
        callback(err, files);
    });
}
