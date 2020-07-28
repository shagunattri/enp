const fs = require('fs')
const path = require('path')

const folder = process.argv[2]

const ext = "." + process.argv[3]


if(process.argv.length < 4){
    console.log('Please specift correct args...')
    return
}

fs.readdir(folder,function(err,files) {
    if(err) {
        console.error(err)
        return
    }

    files.forEach(function(file) {
        if(path.extname(file) === ext) {
            console.log(file)
        }
    })
})


