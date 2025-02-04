<?php

//  define('SHOW_VARIABLES', 1);
//  define('DEBUG_LEVEL', 1);

//  error_reporting(E_ALL ^ E_NOTICE);
//  ini_set('display_errors', 'On');

set_include_path('.' . PATH_SEPARATOR . get_include_path());


require_once 'components/utils/system_utils.php';

//  SystemUtils::DisableMagicQuotesRuntime();

SystemUtils::SetTimeZoneIfNeed('America/Los_Angeles');

function GetGlobalConnectionOptions()
{
    return array(
  'server' => 'localhost',
  'port' => '3306',
  'username' => 'root',
  'password' => 'karthikhvenkat',
  'database' => 'students3k'
);
}

function GetPageInfos()
{
    $result = array();
    $result[] = array('caption' => 'Appointment', 'short_caption' => 'Appointment', 'filename' => 'appointment.php', 'name' => 'appointment');
    $result[] = array('caption' => 'Billing', 'short_caption' => 'Billing', 'filename' => 'billing.php', 'name' => 'billing');
    $result[] = array('caption' => 'Labtest', 'short_caption' => 'Labtest', 'filename' => 'labtest.php', 'name' => 'labtest');
    $result[] = array('caption' => 'Prescription', 'short_caption' => 'Prescription', 'filename' => 'prescription.php', 'name' => 'prescription');
    $result[] = array('caption' => 'Testtype', 'short_caption' => 'Testtype', 'filename' => 'testtype.php', 'name' => 'testtype');
    return $result;
}

function GetPagesHeader()
{
    return
    '';
}

function GetPagesFooter()
{
    return
        ''; 
    }

function ApplyCommonPageSettings($page, $grid)
{
    $page->SetShowUserAuthBar(false);
    $grid->BeforeUpdateRecord->AddListener('Global_BeforeUpdateHandler');
    $grid->BeforeDeleteRecord->AddListener('Global_BeforeDeleteHandler');
    $grid->BeforeInsertRecord->AddListener('Global_BeforeInsertHandler');
}

/*
  Default code page: 1252
*/
function GetAnsiEncoding() { return 'windows-1252'; }

function Global_BeforeUpdateHandler($page, $rowData, &$cancel, &$message, $tableName)
{

}

function Global_BeforeDeleteHandler($page, $rowData, &$cancel, &$message, $tableName)
{

}

function Global_BeforeInsertHandler($page, $rowData, &$cancel, &$message, $tableName)
{

}

function GetDefaultDateFormat()
{
    return 'Y-m-d';
}
?>