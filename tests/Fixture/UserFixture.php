<?php
namespace UserTools\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserFixture
 *
 * @author Florian Krämer
 * @copyright 2013 Florian Krämer
 * @license MIT
 */
class UserFixture extends TestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = [
		'id' => ['type' => 'string', 'null' => false, 'length' => 36, 'key' => 'primary'],
		'username' => ['type' => 'string', 'null' => false, 'default' => null],
		'slug' => ['type' => 'string', 'null' => false, 'default' => null],
		'password' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 128],
		'password_token' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 128],
		'email' => ['type' => 'string', 'null' => true, 'default' => null],
		'email_verified' => ['type' => 'boolean', 'null' => true, 'default' => '0'],
		'email_token' => ['type' => 'string', 'null' => true, 'default' => null],
		'email_token_expires' => ['type' => 'datetime', 'null' => true, 'default' => null],
		'tos' => ['type' => 'boolean', 'null' => true, 'default' => '0'],
		'active' => ['type' => 'boolean', 'null' => true, 'default' => '0'],
		'last_action' => ['type' => 'datetime', 'null' => true, 'default' => null],
		'last_login' => ['type' => 'datetime', 'null' => true, 'default' => null],
		'is_admin' => ['type' => 'boolean', 'null' => true, 'default' => '0'],
		'role' => ['type' => 'string', 'null' => true, 'default' => null],
		'created' => ['type' => 'datetime', 'null' => true, 'default' => null],
		'modified' => ['type' => 'datetime', 'null' => true, 'default' => null],
		'indexes' => [
			'PRIMARY' => ['column' => 'id', 'unique' => 1]]
	];

/**
 * Records
 *
 * @var array
 */
	public $records = [
		[
			'id' => '1',
			'username' => 'adminuser',
			'slug' => 'adminuser',
			'password' => 'test', // test
			'password_token' => 'testtoken',
			'email' => 'adminuser@cakedc.com',
			'email_verified' => 1,
			'email_token' => 'testtoken',
			'email_token_expires' => '2008-03-25 02:45:46',
			'tos' => 1,
			'active' => 1,
			'last_action' => '2008-03-25 02:45:46',
			'last_login' => '2008-03-25 02:45:46',
			'is_admin' => 1,
			'role' => 'admin',
			'created' => '2008-03-25 02:45:46',
			'modified' => '2008-03-25 02:45:46'
		],
		[
			'id' => '2',
			'username' => 'newuser',
			'slug' => 'newuser',
			'password' => 'test', // test
			'password_token' => 'newusertoken',
			'email' => 'newuser@cakedc.com',
			'email_verified' => 1,
			'email_token' => 'secondusertesttoken',
			'email_token_expires' => '2008-03-25 02:45:46',
			'tos' => 1,
			'active' => 1,
			'last_action' => '2008-03-25 02:45:46',
			'last_login' => '2008-03-25 02:45:46',
			'is_admin' => 1,
			'role' => 'admin',
			'created' => '2008-03-25 02:45:46',
			'modified' => '2008-03-25 02:45:46'
		]
	];

}