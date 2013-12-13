<?php

/**
 * Kelas CounterEventHandlerTest melakukan uji coba fungsi - fungsi yang ada 
 * dalam komponen CounterEventHandler. Kelas ini extends CDbTestCase karena 
 * melibatkan active records. Kelas CounterEventHandlerTest menguji fungsi 
 * untuk mengecek apakah sistem berhasil melakukan upload dan download 
 * badge dengan benar. 
 */
class CounterEventHandlerTest extends CDbTestCase
{
	/**
	 * The fixtures of this test.
	 */
	public $fixtures = array(
		'students'=>'Student',
		'badges'=>'Badge',
	);

	/**
	 * Tests checkUploads() method in BadgeEventHandler class.
	 */
	public function testCheckUploads()
	{
		$student1 = $this->students('student1');
		$student2 = $this->students('student2');
		$student3 = $this->students('student3');

		$badge = $this->badges('badge1');

		$handler = new CounterEventHandler();
		$this->assertTrue($handler->checkUploads($student1, array('badge'=>$badge, 'count'=>1)));
		$this->assertFalse($handler->checkUploads($student2, array('badge'=>$badge, 'count'=>2)));
		$this->assertFalse($handler->checkUploads($student3, array('badge'=>$badge, 'count'=>1)));
	}

	/**
	 * Tests checkDownloads() method in BadgeEventHandler class.
	 */
	public function testCheckDownloads()
	{
		$student1 = $this->students('student1');
		$student2 = $this->students('student2');
		$student3 = $this->students('student3');

		$badge = $this->badges('badge3');

		$handler = new CounterEventHandler();
		$this->assertTrue($handler->checkDownloads($student3, array('badge'=>$badge, 'count'=>2)));
		$this->assertFalse($handler->checkDownloads($student1, array('badge'=>$badge, 'count'=>2)));
		$this->assertFalse($handler->checkDownloads($student2, array('badge'=>$badge, 'count'=>0)));
	}
}