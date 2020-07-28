'use strict'

const fs = require('fs')

const readline = fs.readFileSync(process.argv[2],'utf-8')

const lines = readline.split('\n').length-1
console.log(lines)

