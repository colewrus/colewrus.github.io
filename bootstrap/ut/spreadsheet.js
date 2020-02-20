const { GoogleSpreadsheet } = require('google-spreadsheet');
const { promisify } = require('util');

const { creds } = require('./orderUp_secret.json');


async function accessSpreadsheet(){
	const doc = new GoogleSpreadsheet('1SAwIMBiJuA4sbkzkP7ZYYQDCAVrVTnexiGFTyKP51CI');
	await promisify(doc.useServiceAccountAuth)(creds);
	const info = await promisify(doc.getInfo)();
	const sheet = info.worksheets[0];
	console.log('Title:  ${sheets.title}, Rows: ${sheets.rowCount}');
}

accessSpreadsheet();