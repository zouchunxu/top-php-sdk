<?php
/**
 * TOP API: taobao.qianniu.task.increase request
 * 
 * @author auto create
 * @since 1.0, 2015.01.19
 */
class QianniuTaskIncreaseRequest
{
	/** 
	 * 任务元id
	 **/
	private $metadataId;
	
	/** 
	 * 任务列表，JSON格式，例如： tasks =[{ "receiver_uid" : 123, "receiver_nick" : "nick"}, { "receiver_uid" : 456, "receiver_nick" : "nick2"} ]
	 **/
	private $tasks;
	
	private $apiParas = array();
	
	public function setMetadataId($metadataId)
	{
		$this->metadataId = $metadataId;
		$this->apiParas["metadata_id"] = $metadataId;
	}

	public function getMetadataId()
	{
		return $this->metadataId;
	}

	public function setTasks($tasks)
	{
		$this->tasks = $tasks;
		$this->apiParas["tasks"] = $tasks;
	}

	public function getTasks()
	{
		return $this->tasks;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.task.increase";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->metadataId,"metadataId");
		RequestCheckUtil::checkNotNull($this->tasks,"tasks");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
