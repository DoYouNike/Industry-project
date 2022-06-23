/**
 * Tests that fakepass returns a randomly hashed string
 */

const assert = require('assert');
const fakepass = require('../src/lib/fakepass.js')

describe('Fakepass', function()
{
  it("Should return a bcrypt hash", function()
  {
    assert.ok(fakepass.randpass().startsWith('$2b$12$'))
  })
});