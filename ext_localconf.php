<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(Mindscreen\FalUpload\Property\TypeConverter\UploadedFileReferenceConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(Mindscreen\FalUpload\Property\TypeConverter\ObjectStorageConverter::class);
