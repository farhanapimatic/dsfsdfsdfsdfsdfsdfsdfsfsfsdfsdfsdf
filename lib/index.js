/**
  * @module BATesterLib
  *
  * TODO Enter a description
  */

'use strict';

const Configuration = require('./configuration');
const Environments = require('./Environments');
const APIController = require('./Controllers/APIController');
const SuiteCodeEnum = require('./Models/SuiteCodeEnum');
const APIException = require('./Exceptions/APIException');


const initializer = {
    // functional components of BATesterLib
    Configuration,
    Environments,
    // controllers of BATesterLib
    APIController,
    // models of BATesterLib
    SuiteCodeEnum,
    // exceptions of BATesterLib
    APIException,
};

module.exports = initializer;
