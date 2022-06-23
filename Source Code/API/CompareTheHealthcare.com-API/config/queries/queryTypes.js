/**
 * Holds the functions handling the type of query being made on the database
 */

const connectscript = require('../database/connectionconfig.js');
const connection = connectscript.connection;
const fakepass = require('../../src/lib/fakepass.js');

function insertionQuery(stmt, params, req, resp)
{
    connection.query(stmt, params, function(error, result){
        if(!!error)
        {
            console.log("Response 400 to insertion attempt with " + JSON.stringify(req.query));
            resp.status(400).send("Requested insertion could not be performed. Params were likely in invalid format.");
        }
        else
        {
            console.log("Response 200 and insertion completed with " + JSON.stringify(req.query));
            resp.status(200).send("Success");      //send back message of success
        }
    });
}

function retrievalQuery(stmt, req, resp)
{
    connection.query(stmt, function(error, rows){
        if(!!error)
        {
            console.log("Response 500 to retrieval request with " + JSON.stringify(req.query));
            resp.status(500).send("Requested data could not be found");
        }
        else if (rows === undefined || rows[0].length == 0)
        {
            console.log("Response 200 to retrieval request with " + JSON.stringify(req.query));
            resp.status(200).send("No results");      //convert the array to a JSON string to make it nicer
        }
        else
        {
            console.log("Response 200 and returning " + rows[0].length + " rows with " + JSON.stringify(req.query));
            resp.status(200).send(JSON.stringify(rows[0]));      //convert the array to a JSON string to make it nicer
        }
    });
}

function searchQuery(stmt, params, req, resp)
{
    connection.query(stmt, params, function(error, rows, fields){
        if(!!error)
        {
            console.log(error);
            console.log("Response 500 to search request with " + JSON.stringify(req.query));
            resp.status(500).send("Requested data could not be found");
        }
        else if (rows === undefined || rows[0].length == 0)
        {
            console.log("Response 204 to search request with " + JSON.stringify(req.query));
            resp.status(200).send("No results");      //convert the array to a JSON string to make it nicer
        }
        else
        {
            console.log("Response 200 and returning " + rows[0].length + " rows with " + JSON.stringify(req.query));
            resp.status(200).send(JSON.stringify(rows[0]));      //convert the array to a JSON string to make it nicer
        }
    });
}

/*function updateQuery(stmt, params, req, resp)
{
    connection.query(stmt, params, function(error, rows, fields){
        if(!!error)
        {
            console.log("Response 500 to update request with " + JSON.stringify(req.query));
            resp.status(500).send("Requested data could not be updated");
        }
        else
        {
            console.log("Response 200 and insertion completed with " + JSON.stringify(req.query));
            resp.status(200).send("Success");      //send back message of success
        }
    });
}*/

function loginQuery(stmt, params, req, resp)
{
    connection.query(stmt, params, function(error, rows, fields) {
        if(!!error)
        {
            console.log(error);
            console.log("Response 500 to login attempt with " + JSON.stringify(req.query));
            resp.status(500).send("Server failed to authenticate");
        }
        else if (Object.keys(rows[0]).length == 0 || Object.keys(rows[0]).length > 1)
        {
            console.log("Response 200 to failed login attempt with " + JSON.stringify(req.query));
            resp.status(200).send(JSON.stringify(fakepass.randpass(Math.ceil(Math.random() * 10))));      //multiple user records were found. Impossible to validate
        }
        else
        {
            storedhash = rows[0][0].password;
            console.log("Response 200 and found login for " + JSON.stringify(req.query));
            resp.status(200).send(JSON.stringify(storedhash));      //send back message of success
        }
    })
}

exports.insertionQuery = insertionQuery;
//exports.updateQuery = updateQuery;
exports.searchQuery = searchQuery;
exports.retrievalQuery = retrievalQuery;
exports.loginQuery = loginQuery;