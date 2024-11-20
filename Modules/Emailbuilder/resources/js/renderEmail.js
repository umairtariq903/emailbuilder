// resources/js/renderEmail.js

import { renderToStaticMarkup } from '@usewaypoint/email-builder';
import { CONFIGURATION } from './emailBuilderConfig';

const string = renderToStaticMarkup(CONFIGURATION, { rootBlockId: 'root' });

console.log(string); // Logs the rendered HTML email string
