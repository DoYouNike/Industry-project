/**
* Contains a list of possible queries on the database
*/

/**
 * RETRIEVING
 */

//Retrieving all data (admin only!)
const allSearch =
"CALL allSearch()";

//Retrieving all DRG Groups (admin only!)
const allDRG =
"CALL allDRG()";

//Retrieving all provider names (admin only!)
const allProviders =
"CALL allProviders()";

//Retrieving all zip codes (admin only!)
const allZipCodes = 
"CALL allZipCodes()";







/**
 * SEARCHING
 */

//Searching most recent data using a DRG definition through the search bar (price optional)
const drgSearch = 
// "CALL drgSearch(?, ?, ?, ?, ?)";
"CALL drgSearch(?, ?)";

//Search historic data using a DRG ID and provider ID
const historicSearch = 
"CALL allDataSearch(?, ?)";

//Searching procedures in a given city (price optional)
const drglocationSearchByCity = 
// "CALL drglocationSearchByCity(?, ?, ?, ?, ?, ?)";
"CALL drglocationSearchByCity(?, ?, ?)";

//Searching procedures in a given state (price optional)
const drglocationSearchByState = 
// "CALL drglocationSearchByState(?, ?, ?, ?, ?, ?)";
"CALL drglocationSearchByState(?, ?, ?)";

//Searching procedures in a given city (price optional)
const locationSearchByCity = 
// "CALL locationSearchByCity(?, ?, ?, ?, ?)";
"CALL locationSearchByCity(?, ?)";

//Searching procedures in a given state (price optional)
const locationSearchByState = 
// "CALL locationSearchByState(?, ?, ?, ?, ?)";
"CALL locationSearchByState(?, ?)";





/**
 * INSERTING
 */

//Inserting a new provider
const insertProvider = 
"CALL insertProvider(?, ?, ?, ?, ?, ?)";

//Inserting a new DRG Group
const insertDrg = 
"CALL insertDRG(?, ?)";

//Inserting a DRG for hospital
const insertProcedureFigures =
"CALL insertProcedureFigures(?, ?, ?, ?, ?, ?, ?)";




/**
 * UPDATING
 

//Update provider address
const updateProvider = 
"CALL updateProvider(?, ?, ?, ?, ?, ?, ?)";

//Update DRG figures for one year
const updateProcedureFigures = 
"CALL updateProcedureFigures(?, ?, ?, ?, ?, ?, ?, ?)";
*/







/**
 * LOGGING IN
 */

const login = 
"CALL login(?)";











/**
 * Exporting variables
 */

exports.allSearch = allSearch;
exports.allDRG = allDRG;
exports.allProviders = allProviders;
exports.drgSearch = drgSearch;
exports.drglocationSearchByCity = drglocationSearchByCity;
exports.drglocationSearchByState = drglocationSearchByState;
exports.locationSearchByCity = locationSearchByCity;
exports.locationSearchByState = locationSearchByState;
exports.insertProvider = insertProvider;
exports.insertDrg = insertDrg;
exports.insertProcedureFigures = insertProcedureFigures;
//exports.updateProvider = updateProvider;
//exports.updateProcedureFigures = updateProcedureFigures;
exports.login = login;
exports.allZipCodes = allZipCodes;
exports.historicSearch = historicSearch;