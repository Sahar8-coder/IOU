//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
import sendgrid from '@sendgrid/mail';

sendgrid.setApiKey(process.env.SENDGRID_API_KEY);

export default async (req, res) => {
  try {
    await sendgrid.send({
      to: 'your@email.com',
      from: 'your@email.com',
      subject: 'Serverless Functions',
      text: 'Hello, world!'
    });
  } catch (error) {
    return res.status(error.statusCode || 500).json({ error: error.message });
  }

  return res.status(200).json({ error: '' });
};