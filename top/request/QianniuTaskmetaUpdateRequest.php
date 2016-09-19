<?php
/**
 * TOP API: taobao.qianniu.taskmeta.update request
 * 
 * @author auto create
 * @since 1.0, 2015.01.19
 */
class QianniuTaskmetaUpdateRequest
{
	/** 
	 * 要更新的任务元数据，JSON格式，例如：
meta= {
		"id" : 1,
		"title" : "xxx",
		"content" : "yyyy",
		"biz_sys_Id" : 12232,
		"biz_sys_task_type" : 1212,
		"start_time" : 1380173565480,
		"end_time" : 1380173565480,
 "sender_uid" : 213123213,
		"sender_nick" : "tbtest1063",
		"reminder_flag" : 1,
		"finish_strategy" : 1
	}
	 **/
	private $meta;
	
	private $apiParas = array();
	
	public function setMeta($meta)
	{
		$this->meta = $meta;
		$this->apiParas["meta"] = $meta;
	}

	public function getMeta()
	{
		return $this->meta;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.taskmeta.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->meta,"meta");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
