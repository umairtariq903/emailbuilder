// resources/js/EmailReaderComponent.js

import React from 'react';
import { Reader } from '@usewaypoint/email-builder';
import { CONFIGURATION } from './emailBuilderConfig';

const EmailReaderComponent = () => (
  <Reader document={CONFIGURATION} rootBlockId="root" />
);

export default EmailReaderComponent;
