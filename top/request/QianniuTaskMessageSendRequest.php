<?php
/**
 * TOP API: taobao.qianniu.task.message.send request
 * 
 * @author auto create
 * @since 1.0, 2015.01.19
 */
class QianniuTaskMessageSendRequest
{
	/** 
	 * 任务元id，如果taskid不为空，则只发给task对应的单个接收人。如果taskid为空，则发给metadata_id对应的所有接收人。
	 **/
	private $metadataId;
	
	/** 
	 * 任务ID。如果taskid不为空，则只发给task对应的单个接收人。如果taskid为空，则发给metadata_id对应的所有接收人。
	 **/
	private $taskId;
	
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

	public function setTaskId($taskId)
	{
		$this->taskId = $taskId;
		$this->apiParas["task_id"] = $taskId;
	}

	public function getTaskId()
	{
		return $this->taskId;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.task.message.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
