<?php
/**
 * TOP API: taobao.qianniu.task.cancel request
 * 
 * @author auto create
 * @since 1.0, 2015.01.19
 */
class QianniuTaskCancelRequest
{
	/** 
	 * 任务备注
	 **/
	private $memo;
	
	/** 
	 * 任务元数据ID
	 **/
	private $metaId;
	
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

	public function setMetaId($metaId)
	{
		$this->metaId = $metaId;
		$this->apiParas["meta_id"] = $metaId;
	}

	public function getMetaId()
	{
		return $this->metaId;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.task.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->metaId,"metaId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
