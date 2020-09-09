const mongoose = require('mongoose');

//schema
const userSchema = new mongoose.Schema({
    email: {
        type:String,
        required:true,
        unique:true,
        lowercase:true
    },
    password: {
        type:String,
        required:true,
        minlength:6
    },
});


//model to be singular of database collection as mongo plurals it
const User = mongoose.model('user',userSchema);

module.exports = User;