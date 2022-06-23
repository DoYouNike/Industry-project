let express = require('express');
let app = express();    //used to host the API
const connectscript = require('../config/database/connectionconfig.js')
const connection = connectscript.connection
const queries = require('../config/queries/queries.js')
const queryTypes = require('../config/queries/queryTypes.js')
const serverconfig = require('../config/server/server.js')
const cors = require('cors')
app.use(cors())

function shutDown() 
{
    console.log('Received kill signal, shutting down gracefully');
    server.close(() => {
        console.log('Closed out remaining connections');
        process.exit(0);
    });

    setTimeout(() => {
        console.error('Could not close connections in time, forcefully shutting down');
        process.exit(1);
    }, 10000);

    connections.forEach(curr => curr.end());
    setTimeout(() => connections.forEach(curr => curr.destroy()), 5000);
}

function connect()
{
    connection.connect(function(error, resp)
    {
        if(!!error)
        {
            console.log("Error connecting to database");
            return false
        }
    
        console.log("Connection success");
        return true
    });
}

/**
 * LOGGING IN
 */

 app.post('/login', async function(req, resp)
 {
     const username = req.query.username || undefined;

     if (username == undefined)
     {
         console.log("Response 400 to " + JSON.stringify(req.query))
         resp.status(400).send("Invalid login request. Missing params?");
         return;
     }
 
     const stmt = queries.login;
     params = [username];
     queryTypes.loginQuery(stmt, params, req, resp)
 })

/**
 * RETRIEVING ROUTES
 */

 //Retrieving all data
app.get('/getall', async function(req, resp)
{
    const stmt = queries.allSearch;
    queryTypes.retrievalQuery(stmt, req, resp);
})

//Retrieving list of all DRG Groups
app.get('/getdrg', async function(req, resp)
{
    const stmt = queries.allDRG;
    queryTypes.retrievalQuery(stmt, req, resp);
})

//Retrieving list of all provider names
app.get('/getproviders', async function(req, resp)
{
    const stmt = queries.allProviders;
    queryTypes.retrievalQuery(stmt, req, resp);
})

//Retrieving list of all zip codes
app.get('/getzipcodes', async function(req, resp)
{
    const stmt = queries.allZipCodes;
    queryTypes.retrievalQuery(stmt, req, resp);
})

/**
 * INSERTING ROUTES
 */

//Adding a new provider
app.get('/insertprovider', async function(req, resp)
{
    const providername = req.query.providername || undefined;
    const providerstreetaddress = req.query.providerstreetaddress || undefined;
    const providercity = req.query.providercity || undefined;
    const providerstate = req.query.providerstate || undefined;
    const providerzipcode = req.query.providerzipcode || undefined;
    const hospitalrrhrrd = req.query.hospitalrrhrrd || undefined;

    const params = [providername, providerstreetaddress, providercity, providerstate, providerzipcode, hospitalrrhrrd]

    for (let i=0; i< params.length; i++)
    {
        if (params[i] == undefined)
        {
            console.log("Response 400 to " + JSON.stringify(req.query))
            resp.status(400).send("Invalid insertion request. Missing params?");
            return;
        }
    }

    const stmt = queries.insertProvider;
    queryTypes.insertionQuery(stmt, params, req, resp)
})

//Adding a new DRG Group
app.get('/insertdrg', async function(req, resp)
{
    const drgid = req.query.drgid || undefined;
    const definition = req.query.definition || undefined;

    if (drgid == undefined || definition == undefined)
    {
        console.log("Response 400 to " + JSON.stringify(req.query))
        resp.status(400).send("Invalid insertion request. Missing params?");
        return;
    }

    const stmt = queries.insertDrg;
    params = [drgid, definition];
    queryTypes.insertionQuery(stmt, params, req, resp)
})

//Insert procedure and figures for a given provider
app.get('/insertprocedurefigures', async function(req, resp)
{
    const drgid = req.query.drgid || undefined;
    const providerid = req.query.providerid || undefined;
    const year = req.query.year || undefined;
    const totaldischarge = req.query.totaldischarge || undefined;
    const acc = req.query.acc || undefined;
    const atp = req.query.atp || undefined;
    const amp = req.query.amp || undefined;

    const params = [drgid, providerid, year, totaldischarge, acc, atp, amp]

    for (let i=0; i< params.length; i++)
    {
        if (params[i] == undefined)
        {
            console.log("Response 400 to " + JSON.stringify(req.query))
            resp.status(400).send("Invalid insertion request. Missing params?");
            return;
        }
    }

    const stmt = queries.insertProcedureFigures;
    queryTypes.insertionQuery(stmt, params, req, resp)  
})

/**
 * UPDATING ROUTES
 * Removed as stored procedure has been changed for inserting
 * 1. User passes data via form for what to insert/update
 * 2. If the record exists, update it on whatever data it receives that matches the passed-in drgID, provider ID and year
 * 3. Otherwise, insert a new record
 
//Update provider record
app.post('/updateprovider', async function(req, resp)
{
    const providerid = req.query.providerid || undefined;
    const providername = req.query.providername || undefined;
    const providerstreetaddress = req.query.providerstreetaddress || undefined;
    const providercity = req.query.providercity || undefined;
    const providerstate = req.query.providerstate || undefined;
    const providerzipcode = req.query.providerzipcode || undefined;
    const hospitalrrhrrd = req.query.hospitalrrhrrd || undefined;

    const params = [providerid, providername, providerstreetaddress, providercity, providerstate, providerzipcode, hospitalrrhrrd]

    for (let i=0; i< params.length; i++)
    {
        if (params[i] == undefined)
        {
            console.log("Response 400 to " + JSON.stringify(req.query))
            resp.status(400).send("Invalid update request. Missing params?");
            return;
        }
    }

    const stmt = queries.updateProvider;
    queryTypes.updateQuery(stmt, params, req, resp)  
})

//Updating procedure figures for one provider for one year
app.post('/updateprocedurefigures', async function(req, resp)
{
    const id = req.query.id || undefined;
    const drgid = req.query.drgid || undefined;
    const providerid = req.query.providerid || undefined;
    const year = req.query.year || undefined;
    const totaldischarge = req.query.totaldischarge || undefined;
    const acc = req.query.acc || undefined;
    const atp = req.query.atp || undefined;
    const amp = req.query.amp || undefined;

    const params = [id, drgid, providerid, year, totaldischarge, acc, atp, amp]

    for (let i=0; i< params.length; i++)
    {
        if (params[i] == undefined)
        {
            console.log("Response 400 to " + JSON.stringify(req.query))
            resp.status(400).send("Invalid update request. Missing params?");
            return;
        }
    }

    const stmt = queries.updateProcedureFigures;
    queryTypes.updateQuery(stmt, params, req, resp)  
})
*/

/**
 * SEARCHING ROUTES
 */

//Searching for the most recent financial data by DRG group and/or city or state
app.get('/search', async function(req, resp)
{
    let stmt;
    let params = [];

    const drggroup = req.query.drggroup || undefined;
    const providercity = req.query.providercity || undefined;
    const providerstate = req.query.providerstate || undefined;
    const pricelimit = req.query.pricelimit || 9999999;

    if (drggroup)
    {
        if (providercity == undefined && providerstate == undefined)
        {    
            stmt = queries.drgSearch;
            params.push(drggroup);
        }
        else if (providercity)
        {
            stmt = queries.drglocationSearchByCity;
            params.push(drggroup, providercity);
        }
        else
        {
            stmt = queries.drglocationSearchByState;
            params.push(drggroup, providerstate);
        }
    }
    else if (providercity)
    {
        stmt = queries.locationSearchByCity;
        params.push(providercity);
    }
    else if (providerstate)
    {
        stmt = queries.locationSearchByState;
        params.push(providerstate);
    }
    else
    {
        console.log("Response 406 to no params for search");
        resp.status(406).send("At least one of DRG Group, city or state is required.");
        return;
    }
    
    //params.push(uninsuredmin, uninsuredmax, insuredmin, insuredmax);   
    params.push(pricelimit);
    queryTypes.searchQuery(stmt, params, req, resp);
});

//Searching through historic financial data by DRG group and provider ID
app.get('/historicsearch', async function(req, resp)
{
    const drggroup = req.query.drggroup || undefined;
    const providerid = req.query.providerid || undefined;

    if (drggroup == undefined || providerid == undefined)
    {
        console.log("Response 406 to no params for search");
        resp.status(406).send("Both DRG group and provider ID are required.");
        return;
    }

    const stmt = queries.historicSearch;
    const params = [drggroup, providerid];
    queryTypes.searchQuery(stmt, params, req, resp);
});










/**
 * STARTUP
 */

if (!!connect())
    process.exit(1)

//Hosts the API
//Go to localhost:${port} to see results
const server = app.listen(serverconfig.port, function() {
    console.log("Running on port " + serverconfig.port);
});

//Graceful shutdown function and below code courtesy of user Patrick Hund on Stack Overflow
//Link: https://stackoverflow.com/questions/43003870/how-do-i-shut-down-my-express-server-gracefully-when-its-process-is-killed
process.on('SIGTERM', shutDown);
process.on('SIGINT', shutDown);

let connections = [];

server.on('connection', connection => {
    connections.push(connection);
    connection.on('close', () => connections = connections.filter(curr => curr !== connection));
});

//EXPORTS

exports.connect = connect;
exports.shutDown = shutDown;
exports.app = app;