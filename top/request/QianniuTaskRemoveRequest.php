<?php
/**
 * TOP API: taobao.qianniu.task.remove request
 * 
 * @author auto create
 * @since 1.0, 2015.01.19
 */
class QianniuTaskRemoveRequest
{
	/** 
	 * 对于发起人删除一个任务，请使用这个字段，同时清除所有处理人。
	 **/
	private $metadataId;
	
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

	public function getApiMethodName()
	{
		return "taobao.qianniu.task.remove";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->metadataId,"metadataId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
