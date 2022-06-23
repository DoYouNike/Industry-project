/**
 * Generates random numbers and characters for a fake password
 */

const bcrypt = require('bcrypt');

function randpass(length) {

   //Random string generator courtesy of user csharptest.net on Stack Overflow
   //https://stackoverflow.com/questions/1349404/generate-random-string-characters-in-javascript

    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!"£$%^&*()-_=+@~#';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
       result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    
    return bcrypt.hashSync(result, 12);
 }

 exports.randpass = randpass;