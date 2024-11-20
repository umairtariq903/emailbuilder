// email_templates/render-email.cjs
const fs = require('fs');
const { renderToStaticMarkup } = require('@usewaypoint/email-builder');

// Define the email configuration
const CONFIGURATION = {
    root: {
        type: 'EmailLayout',
        data: {
            backdropColor: '#F8F8F8',
            canvasColor: '#FFFFFF',
            textColor: '#242424',
            fontFamily: 'MODERN_SANS',
            childrenIds: ['block-1709578146127'],
        },
    },
    'block-1709578146127': {
        type: 'Text',
        data: {
            style: {
                fontWeight: 'normal',
                padding: {
                    top: 16,
                    bottom: 16,
                    right: 24,
                    left: 24,
                },
            },
            props: {
                text: 'Hello world!',
            },
        },
    },
};

// Render the email configuration to static HTML
const emailHtml = renderToStaticMarkup(CONFIGURATION, { rootBlockId: 'root' });

// Save the rendered HTML to a file
fs.writeFileSync('storage/email-output.html', emailHtml, 'utf8');
console.log('Email HTML generated and saved to storage/email-output.html');
