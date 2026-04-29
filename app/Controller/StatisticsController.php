<?php

App::uses('AppController', 'Controller');

class StatisticsController extends AppController {

    public $uses = array('UtmData');
    public $components = array('Paginator');

    public function utm_list() {

    $rows = $this->UtmData->find('all', array(
        'fields' => array('source', 'medium', 'campaign', 'content', 'term'),
        'order' => array('source ASC', 'medium ASC', 'campaign ASC')
    ));

    $result = array();

    foreach ($rows as $row) {

        $s = $row['UtmData']['source'];
        $m = $row['UtmData']['medium'];
        $c = $row['UtmData']['campaign'];
        $ct = $row['UtmData']['content'];
        $t = $row['UtmData']['term'];

        if (!isset($result[$s])) {
            $result[$s] = array();
        }

        if (!isset($result[$s][$m])) {
            $result[$s][$m] = array();
        }

        if (!isset($result[$s][$m][$c])) {
            $result[$s][$m][$c] = array();
        }

        if (!isset($result[$s][$m][$c][$ct])) {
            $result[$s][$m][$c][$ct] = array();
        }

        $result[$s][$m][$c][$ct][] = $t ?: 'NULL';
    }

    $this->set('data', $result);
}
}