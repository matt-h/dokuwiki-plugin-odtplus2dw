<?php
/**
 * Default settings for the odt2dw plugin
 *
 * @author Greg BELLAMY <garlik.crx@gmail.com> [Gag]
 * @author José Torrecilla <qky669@gmail.com>
 */

$conf['debugLvl']                 = 1;                  // debug mode level -- more verbose ( 0: no display; 1: display error msg; 3: display&log error msg all msg; 3: display&log all )
$conf['logFile']                  = '';                 // log File where $this->_msg write with debugLvl >= 2
$conf['formDisplayRule']          = 'odt2dw,edit,show'; // which action will display the odtplus2dw upload form in newpage
$conf['showimportbutton']         = 1;                  // Show import button in pagetools. 0=no; 1=yes
$conf['formIntroMessage']         = 'default';          // personnalized message - if "default", display the language default message
$conf['formMaxFileSize']          = 2097152;            // maxsize for userFile upload
$conf['parserPostDisplay']        = 'show';             // which action perform after parsing the odt file
$conf['parserXslFile']            = 'odt2dw.xsl';       // name of the xslpage use to transform the odtFile
$conf['parserLinkToOriginalFile'] = 1;                  // display a link to the original userFile 0=no link; 1=link
$conf['parserCoreTimeOut']        = 300;                // the parserCoreTimeOut give specific timeout to parse the xmlFile with the xslFile. Bigger is the odtFile, longer will the parser take.
$conf['parserUploadDir']          = '/tmp/odt2dw/';     // system path where the file will be moved after upload but before parse
$conf['parserMimeTypeAuthorized'] =                     // mimetypes authorized to be uploaded
'application/vnd.oasis.opendocument.text
application/octetstream
application/vnd.openxmlformats-officedocument.wordprocessingml.document
application/msword';                                    
$conf['parserMimeTypePandoc']     =                     // mimetype that need Pandoc conversion
'application/vnd.openxmlformats-officedocument.wordprocessingml.document'; 
$conf['parserMimeTypeSOffice']    =                     // mimetype that need SOffice conversion'
'application/msword'; 
