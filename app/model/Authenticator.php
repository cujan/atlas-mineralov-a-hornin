<?php

use Nette\Security as NS;


/**
 * Users authenticator.
 */
class Authenticator extends Nette\Object implements NS\IAuthenticator
{
	/** @var Nette\Database\Connection */
	private $database;



	public function __construct(Nette\Database\Connection $database)
	{
		$this->database = $database;
	}



	/**
	 * Performs an authentication
	 * @param  array
	 * @return Nette\Security\Identity
	 * @throws Nette\Security\AuthenticationException
	 */
	public function authenticate(array $credentials)
        {
            list($username, $password) = $credentials;
            $row = $this->userRepository->findByName($username);

            if (!$row) {
                throw new NS\AuthenticationException("User '$username' not found.", self::IDENTITY_NOT_FOUND);
            }

            if ($row->password !== self::calculateHash($password, $row->password)) {
            throw new NS\AuthenticationException("Invalid password.", self::INVALID_CREDENTIAL);
            }

            unset($row->password);
            return new NS\Identity($row->id, NULL, $row->toArray());
        }



	/**
	 * Computes salted password hash.
	 * @param  string
	 * @return string
	 */
	public static function calculateHash($password, $salt = null)
        {
            if ($salt === null) {
            $salt = '$2a$07$' . Nette\Utils\Strings::random(32) . '$';
            }
        return crypt($password, $salt);
        }

}
