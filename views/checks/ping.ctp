<?php
$sources = ConnectionManager::sourceList();
if (!isset($logs)):
    $logs = array();
    foreach ($sources as $source):
        $db =& ConnectionManager::getDataSource($source);
        if (!$db->isInterfaceSupported('getLog')):
            continue;
        endif;
        $logs[$source] = $db->getLog();
    endforeach;
endif;
?>
<status>OK</status>
<response_time><?php echo $logs['default']['time']; ?></response_time>
