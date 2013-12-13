<?php

/**
 * Kelas UserIdentityTest melakukan uji coba fungsi - fungsi yang ada 
 * dalam model UserIdentity. Kelas ini extends CDbTestCase karena 
 * melibatkan active records. Kelas UserIdentityTest menguji fungsi 
 * untuk mengecek apakah sistem berhasil login, dan apakah sistem 
 * berhasil menjalankan fungsi humanize() dengan baik.
 */
class UserIdentityTest extends CDbTestCase
{
	public $fixtures = array(
		'students'=>'Student',
	);

	/**
	 * Tests the login action.
	 */
	public function testLogin()
	{
		$identity = new UserIdentity('dummy.user');
		$this->assertTrue($identity->authenticate());

		$student = Student::model()->findByAttributes(array('username' => 'dummy.user'));
		$this->assertNotNull($student);
		$this->assertEquals('Dummy User', $student->name);
		$this->assertTrue($student->is_admin == 0);
		$this->assertTrue($student->faculty->id == 1);
		$this->assertEquals(Yii::app()->params['defaultProfilePhoto'], $student->photo);
	}

	/**
	 * Tests the humanize function.
	 */
	public function testHumanize()
	{
		$this->assertEquals('Ashar Fuadi', UserIdentity::humanize('ashar.fuadi'));
		$this->assertEquals('Kemal Maulana', UserIdentity::humanize('kemal.maulana'));
		$this->assertEquals('Mercia', UserIdentity::humanize('mercia01'));
		$this->assertEquals('Annisa Prida', UserIdentity::humanize('annisa.prida'));
	}
}