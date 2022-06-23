/**
 * Contains connection details for the database
 */

const mysql = require('mysql');

//Connection details
const connection = mysql.createConnection({
    host: 'silva.computing.dundee.ac.uk',
    user: '2019indteam4',
    password: '5478.ind4.8745',
    database: '2019indteam4db'
});

exports.connection = connection