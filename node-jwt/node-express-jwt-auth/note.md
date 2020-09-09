### Testing Routes

Simulating requests using postman and testing routes to handle GET nad POST requests

The router in `app.js` is to handle the routing and the auth routes we made in the `rotues/authRouther.js`

Auth Controller handles sending responses.

We can add body and send raw JSON data with email and password values.

now it displays new login and we can change the request handler by using the json parser middleware in express and

`app.user(express.json())`

It take json data and passes in js obj for using it in code and attaches the obj with data to use with the req handlers.

now res.body in login_post and console log the data 

The same can be done for `signup_post` with the data of email and password.

Then destructuring it to get email,password from the req.body.

```js
const {email,password} = req.body;
    console.log(email,password);
```

### User Model

create schema for mongoose and for the db in models/user.js
and setup authController to use try catch for add data to the database and report back the errors

### Mongoose Validation

Validate errors and handle error message for specific user input error and validate email using the validator package.

Update User schema to reflect error messages and error out double entry of existing email using the error code.


### Mongoose Hooks

Hashing user passwords using bcrypt and pre save mongoose hooks.

Mongoose hook is a special fn which fires after a certain mogoose event happens.

fire functions before and after a event to carry out hashing of paswords before we save it to the db.

### Bcrypt

using hooks and bcrypt to hash passwords with salt.

### Auth Views

Creatinf the frontend of login and signup pages

### Cookie Primer

Use `cookie-parser` to parse cookies to pages and set options using the objects from the cookie parser.


### JWT Tokens

Never expose state changing endpoints to prevent CSRF.

[JWT](jwt.io)


>JWT Signing 

- Header
    - Tells the server what type of signature is being used(meta).
- Payload
    - Used to identify the user(eg.contains user id)
- Signature
    - Makes the token secure(like a stamp of authenticity).

Then the header and payload are hashed together with a secret `secure secret string` and then creates the signature.

The end format to the token is `Headers.Payload.Signature`.

New user signup and create jwt token for a new signup using the `jsonwebtokens` library to create a token for a new signup in teh auth controller and set the properties to it.