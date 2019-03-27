<?php
class RequestAssistance extends Db_objects {
	protected
	$Id,
	$TeacherId,
	$Lab,
	$Message,
	$See,
	$DateTime;
	protected static $table = "request_assistance";
	protected static $fields = array(
		'Id',
		'TeacherId',
		'Lab',
		'Message',
		'DateTime',
		'See'
	);

	public function setSee($value)
	{
		return $this->See = $value;
	}

	public function updateSee()
	{
		$sql =" UPDATE ".static::$table;
		$sql.=" SET See = 1";
		$sql.=" WHERE Id = '{$this->Id}'";
		return DB::getInstance()->query($sql);
	}

	public function find_by_lab_desc()
	{
		$sql =" UPDATE ".static::$table;
		$sql.=" SET See = 1";
		$sql.=" WHERE Id = '{$this->Id}'";
		$sql.=" ORDER BY Id DESC ";
		return self::find_this_query($sql);

	}


	public function save() 
	{
		return ($this->Id) ? $this->update() : $this->create();
	}


	public static function findbyLabSee($lab,$see)
	{
		$sql = "SELECT * FROM ".static::$table;
		$sql.=" WHERE Lab = '{$lab}' ";
		$sql.=" AND See = '{$see}'";
		$result =  static::find_this_query($sql);
		return !empty($result) ? array_shift($result) : FALSE;
	}

	public static function findbyLabSeeDesc($lab,$see)
	{
		$sql = "SELECT * FROM ".static::$table;
		$sql.=" WHERE Lab = '{$lab}' ";
		$sql.=" AND See = '{$see}'";
		$sql.=" ORDER BY Id Desc";
		return  static::find_this_query($sql);
		
	}

	public static function findbySees($see)
	{
		$sql = "SELECT * FROM ".static::$table;
		$sql.=" WHERE See = '{$see}'";
		return static::find_this_query($sql);
	}



	public static function hasRequest($lab) {
		return (!empty( self::findbyLabSee($lab,0) )) ? self::RequestTemplate(self::findbyLabSee($lab,0)->Id) : "";
	}



	public static function checkRequest($lab) {
		return (!empty( self::findbyLabSee($lab,0) )) ? true : false;
	}


	public static function RequestTemplate($id)
	{
		return '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
		<span><a class="text-danger requestAlert" id='.$id.' href="?page=request">Requested Assistance!!!</a></span>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>';
	}



	
	public function setId($value){
		return $this->Id = $value;
	}
	public function setTeacherId($value){
		return $this->TeacherId = $value;
	}
	public function setLab($value){
		return $this->Lab = $value;
	}
	public function setMessage($value){
		return $this->Message = $value;
	}
	public function setDateTime($value){
		return $this->DateTime = $value;
	}
	public function getId()
	{
		return $this->Id;
	}
	public function getTeacherId()
	{
		return $this->TeacherId;
	}
	public function getLab()
	{
		return $this->Lab;
	}
	public function getMessage()
	{
		return $this->Message;
	}
	public function getDateTime()
	{
		return $this->DateTime;
	}
} // end of class
