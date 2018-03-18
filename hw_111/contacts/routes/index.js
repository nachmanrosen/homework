var express = require('express');
var router = express.Router();
var contacts=[{'name':'Dovid','address':'34 hill', 'city':'Lakewood'},
{'name':'Boruch','address':'67 hill', 'city':'Lakewood'}
]
/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});
//when type /contacts in url, get contacts and render in view contacts.jade
router.get('/contacts', function(req, res, next) {
 res.send(contacts) ;
 res.render('contacts', { contacts: contacts });
});

// gets data from post, then adds to contacts, then sending back to browser
router.post('/contacts',function(req, res, next) {
  console.log(req);
contacts.push({'name':req.body.name, 'address':req.body.address,'city':req.body.city});
res.send(contacts);
});
module.exports = router;
