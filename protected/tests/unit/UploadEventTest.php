<?php

/**
 * Kelas UploadEventTest melakukan uji coba fungsi - fungsi yang 
 * ada dalam komponen UploadEvent. Sama seperti kelas 
 * DownloadEventTest, Kelas UploadEventTest extends CTestCase. 
 * Kelas UploadEventTest menguji fungsi untuk mengecek apakah 
 * sistem berhasil menjalankan fungsi yang berjalan setelah 
 * terjadi upload dengan benar. 
 */
class UploadEventTest extends CTestCase
{
	/**
	 * Tests get mappings.
	 */
	public function testGetMappings()
	{
		$event = new UploadEvent();
		$mappings = $event->getMappings();
		$this->assertEquals(4, count($mappings));
		$this->assertTrue(in_array(UploadEvent::BRONZE_COUNT, $mappings));
		$this->assertTrue(in_array(UploadEvent::SILVER_COUNT, $mappings));
		$this->assertTrue(in_array(UploadEvent::GOLD_COUNT, $mappings));
	}
}