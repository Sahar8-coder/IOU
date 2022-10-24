const mailer = require('../node_modules/nodemailer')

let transporter = mailer.createTransport({
    service: 'gmail',
    auth: {
      user: 'ze.kirilov@gmail.com',
      pass: '815@.LJKC',
    },
  })

document.getElementById('button').onclick = async function() {
    let result = await transporter.sendMail({
        from: '"Node js" <ze.kirilov@gmail.com>',
        to: 'ze.kirilov@gmail.com, ze.kirilov@gmail.com',
        subject: 'Message from Node js',
        text: 'This message was sent from Node js server.',
        html:
          'This <i>message</i> was sent from <strong>Node js</strong> server.',
      })
      console.log(result)
    alert("button was clicked");
 }