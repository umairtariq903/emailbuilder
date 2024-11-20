import fs from 'fs';
import { renderToStaticMarkup } from '@usewaypoint/email-builder';
import beautify from 'js-beautify';

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

// Beautify the HTML
const beautifiedHtml = beautify.html(emailHtml, {
    indent_size: 2,
    space_in_empty_paren: true,
});

// Convert the HTML to JSON format
const jsonOutput = JSON.stringify({ html: beautifiedHtml });

// Save the JSON output to a file
fs.writeFileSync('storage/email-output.json', jsonOutput, 'utf8');
console.log('Formatted Email HTML generated and saved to storage/email-output.json');
