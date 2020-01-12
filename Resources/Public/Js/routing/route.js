'use strict';

let EmpireRoute = function(name, uri, options) {

	/**
	 * Benennung der Route
	 *
	 * @type {string}
	 */
	this.name = name;

	/**
	 * URI
	 *
	 * @type {string}
	 */
	this.uri = uri;

	// Initialisierung
	this.initialize(options);
};

EmpireRoute.prototype.initialize = function(options) {
};

export default EmpireRoute;