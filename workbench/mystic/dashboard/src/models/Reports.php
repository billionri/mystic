<?php
namespace Mystic\Reports\Models;


class Reports extends \Eloquent
{
    public function downloadExcelUsersList()
    {
        \Excel::create('jiteji.csv', function($excel) {
            $excel->sheet('Sheetname', function($sheet) {
                $sheet->fromArray(array(
                    array('data1', 'data2'),
                    array('data3', 'data4')
                ));
            });
        })->export('xls');
    }
}