<?php
 abstract class baseclass
{
	protected $fname;
	protected $lname;
	public function getFullName()
	{
		return $this->fname ." ".$this->lname;
	}
	public abstract function getmonthlysal();
	public function __construct($f,$l)
	{
		$this->fname=$f;
		$this->lname=$l;
	}
	pubtlic Te() {
		
		
	}
	
}
class fulltime extends baseclass
{
		protected $annualsalary;
		public function getmonthlysal()
		{
			return $this->annualsalary/12;
			
		}
}		
class pertime extends baseclass
{
		protected $annualsalary;
		public function getmonthlysal()
		{
			return $this->annualsalary/12;
			
		}		
		
}
$fulltime=new fulltime('sumit','rajpoot');
$pertime=new pertime('sumit','rajpoot');
echo $fulltime->getFullName();
?>