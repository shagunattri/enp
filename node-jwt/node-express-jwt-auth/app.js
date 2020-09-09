const express = require('express');
const mongoose = require('mongoose');
const authRoutes = require('./routes/authRoutes');
const cookieParser = require('cookie-parser'); //parse cookie data and use as a middleware

const app = express();

// middleware
app.use(express.static('public'));
app.use(express.json());

// view engine
app.set('view engine', 'ejs');

// database connection
const dbURI = 'mongodb+srv://shagun:shagun@cluster0.3klj6.mongodb.net/node-auth';
mongoose.connect(dbURI, { useNewUrlParser: true, useUnifiedTopology: true, useCreateIndex:true })
  .then((result) => app.listen(3000))
  .catch((err) => console.log(err));

// routes
app.get('/', (req, res) => res.render('home'));
app.get('/smoothies', (req, res) => res.render('smoothies'));
app.use(authRoutes);

//cookies
app.use(cookieParser());

app.get('/set-cookies',(req,res) => {
  res.cookie('newUser',false);
  res.cookie('isStudent',true,{maxAge:1000*60*60*24,httpOnly:true});
  res.send('you got the cookie!');
});


app.get('/read-cookies',(req,res) => {
  const cookies = req.cookies;
  console.log(cookies.newUser);
  res.json(cookies);
});