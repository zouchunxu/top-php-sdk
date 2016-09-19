<?php
/**
 * TOP API: taobao.qianniu.task.finish request
 * 
 * @author auto create
 * @since 1.0, 2015.01.19
 */
class QianniuTaskFinishRequest
{
	/** 
	 * 任务备注
	 **/
	private $memo;
	
	/** 
	 * 任务ID
	 **/
	private $taskId;
	
	private $apiParas = array();
	
	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
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
		return "taobao.qianniu.task.finish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->taskId,"taskId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
