<?php

/**
 * Kelas DownloadEventTest melakukan uji coba fungsi - fungsi yang ada dalam 
 * komponen DownloadEvent. Kelas ini extends CTestCase yang berarti bahwa 
 * DownloadEventTest melakukan unit testing secara general. Kelas 
 * DownloadEventTest menguji fungsi untuk mengecek apakah sistem berhasil 
 * menjalankan fungsi yang berjalan setelah terjadi download dengan benar. 
 */
class DownloadEventTest extends CTestCase
{
	/**
	 * Tests get mappings.
	 */
	public function testGetMappings()
	{
		$event = new DownloadEvent();
		$mappings = $event->getMappings();
		$this->assertEquals(4, count($mappings));
		$this->assertTrue(in_array(DownloadEvent::BRONZE_COUNT, $mappings));
		$this->assertTrue(in_array(DownloadEvent::SILVER_COUNT, $mappings));
		$this->assertTrue(in_array(DownloadEvent::GOLD_COUNT, $mappings));
	}
}