import React, { useMemo } from 'react';
import axios from 'axios'; // Import axios for making HTTP requests
import { FileDownloadOutlined } from '@mui/icons-material';
import { IconButton, Tooltip } from '@mui/material';
import { useDocument } from '../../../documents/editor/EditorContext';

export default function SaveJson() {
  const doc = useDocument();

  // Prepare the JSON data
//   const jsonData = useMemo(() => {
//     return JSON.stringify(doc, null, '  '); // Pretty-printed JSON
//   }, [doc]);
  const href = useMemo(() => {
    return `data:text/plain,${encodeURIComponent(JSON.stringify(doc, null, '  '))}`;
  }, [doc]);

  // Function to send the JSON data to the API
  const sendJsonToApi = async () => {
    try {
      // Send the data to the API endpoint
      const response = await axios.post('http://127.0.0.1:8000/api/save-json', { json: doc });
      console.log(response, doc);
    } catch (error) {
      console.error('Error sending JSON to API:', error);
      alert('Error sending JSON to API');
    }
  };

  return (
    <Tooltip title="Save JSON data to API">
      <IconButton onClick={sendJsonToApi} href={href} download="emailTemplate.json" >
        <FileDownloadOutlined fontSize="small" />
      </IconButton>
    </Tooltip>
  );
}
