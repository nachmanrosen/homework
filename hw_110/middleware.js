const connect = require('connect'),
    app = connect();

app.use(require('./query.js'));

app.use((req, res, next) => {
    res.setHeader('Content-Type', 'text/html');
    next();
});

app.use('/about',(req, res, next)=>{ 

res.end('<h1>first page</h1>');
next();	
});

app.use('/home',(req, res, next)=>{     
res.end('<h1>second page </h1>');
next();	
});

app.use((err,req, res, next)=>{
	res.statusCode=500;
    res.end('<h1>error</h1>');
});

app.listen(80);