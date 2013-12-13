<?php

/**
 * Kelas ini melakukan uji coba terhadap fungsi-fungsi yang ada
 * pada kelas model Badge. Kelas BadgeTest extends terhadap 
 * kelas CDbTestCase. Kelas ini memeriksa apakah badge yang 
 * disimpan di database ada dalam direktori proyek.
 */
class BadgeTest extends CDbTestCase
{
	/**
	 * Tests all badges are valid.
	 */
	public function testValid()
	{
		$badges = Badge::model()->findAll();
		foreach ($badges as $badge)
		{
			$this->assertFileExists(Yii::app()->params['badgeIconsDir'] . $badge->location);
		}
	}
}