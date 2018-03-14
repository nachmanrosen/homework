const url = require('url');

module.exports = function (req, res, next) {
    req.query = url.parse(req.url, true).query;
    if(req.query== 'magicWord=please'){
    next();
}
else
{
    next(new Error('No Not Allowed'));
    
}
};

