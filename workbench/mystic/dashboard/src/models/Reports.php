<?php
namespace Mystic\Reports\Models;

class Reports extends \Eloquent
{
    public function downloadExcelUsersList()
    {

	$data = \DB::table('users')->get(); 
	$data1 = array();
	foreach ($data as $d) {
		array_push($data1, (array)$d);
	}
	\Excel::create('mys_u', function($excel) use($data1) {

	    $excel->sheet('Sheetname', function($sheet) use($data1) {
   	            $sheet->row(1, array('id', 'name', 'contact', 'email', 'message', 'feedback', 'added_time', 'updated_time'));
		    $sheet->cells('A1:H1', function ($cells) {
                    // manipulate the range of cells
                    $cells->setBackground('#000000');
                    $cells->setFontColor('#ffffff');
                    $cells->setFont(array(
                        'size' => '10'
                    ));
                  });
		$sheet->rows($data1);
	    });

	})->export('xls');
    }
}
