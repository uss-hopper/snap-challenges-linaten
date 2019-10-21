<?php
namespace latencio23\snap;
require_once("autoload.php");
require_once(dirname(__DIR__, 1) . "/lib/vendor/autoload.php");
use Ramsey\Uuid\Uuid;
class Student {
	use validateUuid;
	private $studentId;
	private $studentEmail;

	public funtion __construct(float $newStudentId, float $newStudentEmail) {
		try {
			$this->setStudentId($newStudentId);
			$this->setStudentEmail($newStudentEmail)
}catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
	$exceptionType = get_class($exception);
	throw(new $exceptionType($exception->getMessage(), 0, $exception));
	}
}
public function getStudentId():Uuid {
		return ($this->studentId);
}
	public function setStudentId(newStudentId): void {
	try {
		$uuid = self::validateUuid(newAuthorId);
	} catch(\InvalidArgumentException | \RangeException | \Exception \ \TypeError $exception) {
		$exceptionTye = get_class($exception);
		throw(new $exceptionType($exception->getMessage(), 0, $exception));
	}
	$this->studentId = $uuid;
	}

	public function getStudentEmail($newStudentEmail): void{
	$newStudentEmail = filter_var($newStudentEmail, FILTER_VALIDATE_EMAIL);
	if (empty($newStudentEmail) === true) {
		throw(new \InvalidArgumentException("Invalid Email"));}
	if(strlen($newAuthorEmail) > 128) {
		throw(new \RangeException("Email has too many characters"));
	}
	$this->studentEmail = $newStudentEmail;
	}
