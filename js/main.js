const nodemailer = require('nodemailer')

let transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
      user: 'ze.kirilov@gmail.com',
      pass: '815@.LJKC',
    },
  })

let result = await transporter.sendMail({
  from: '"Node js" <ze.kirilov@gmail.com>',
  to: 'ze.kirilov@gmail.com, ze.kirilov@gmail.com',
  subject: 'Message from Node js',
  text: 'This message was sent from Node js server.',
  html:
    'This <i>message</i> was sent from <strong>Node js</strong> server.',
})

document.getElementById('button').onclick = function() {
    alert("button was clicked");
 }
 console.log(result)
