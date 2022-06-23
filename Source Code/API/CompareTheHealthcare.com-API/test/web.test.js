/**
 * Tests the web.js file
 */

const superagent = require('superagent');
const supertest = require('supertest');
const axios = require('axios');
const request = require('request');
const web = require('../bin/web.js');
const assert = require('assert');
const unirest = require('unirest');
const app = web.app;

describe('Routes to database', function() 
{
    beforeEach(function(done) 
    {
        assert.ok(web.connect);
        done();
    });

    after(function(done)
    {
        web.shutDown();
        done();
    })

    describe('Retrieval routes', function()
    {
        it('Responds with a 200 to /getall', function() 
        {
          return supertest(app)
            .get('/getall')
            .expect(200)
            // .then(response => {
            //     console.log(response.text);
            //     assert(response.body.email, 'foo@bar.com')
            // })
        });
    
        it('Responds with a 200 to /getdrg', function() 
        {
            return supertest(app)
              .get('/getdrg')
              .expect(200)
        });

        it('Responds with a 200 to /getproviders', function() 
        {
            return supertest(app)
              .get('/getproviders')
              .expect(200)
        });

        it('Responds with a 200 to /getzipcodes', function() 
        {
            return supertest(app)
              .get('/getzipcodes')
              .expect(200)
        });
    });

    describe('Search routes', function()
    {
        xit('Responds with a 200 to /search with DRG parameter', function() 
        {
        //   return superagent(app)
        //     .post('/search')
        //     .query({ drggroup: '039' })
        //     .expect(200)
        //     // .then(response => {
        //     //     console.log(response);
        //     // })

            // request(app).post('/search', {
            //         drggroup: '039'
            // }, (error, res, body) => {
            //     console.log("res is " + res)
            // })

            // return supertest(app)
            // .post('/search')
            // // .send('drggroup=039')
            // .expect(200)
            // .then((res) => {
            // console.log(`statusCode: ${res.statusCode}`)
            // //console.log(res.body);
            // console.log("HELLO");
            // })
            // .catch((error) => {
            // console.error(error)
            // console.log("HI MUM");
            // })
        });

        it('Responds with a 406 to /search with no parameters', function() 
        {
          return supertest(app)
            .post('/search')
            .expect(406)
        });
    });
});